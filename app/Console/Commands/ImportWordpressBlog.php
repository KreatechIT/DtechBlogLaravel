<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImportWordpressBlog extends Command
{
    protected $signature = 'blog:import
                            {file : Path to WordPress XML export (relative to project root)}
                            {--limit=0 : Max posts to import (0 = all)}
                            {--random  : Pick randomly when --limit is set}
                            {--dry-run : Parse and clean only, no DB writes or image downloads}
                            {--skip-images : Skip image downloads (use existing files)}';

    protected $description = 'Import posts from a WordPress WXR XML export';

    private string $imageDir = 'blog-images';

    // Tags we keep in body content
    private array $allowedTags = [
        'p','h1','h2','h3','h4','h5','h6',
        'ul','ol','li','strong','em','b','i','u','s',
        'a','blockquote','cite','q',
        'img','figure','figcaption',
        'table','thead','tbody','tfoot','tr','td','th','caption',
        'br','hr','div','span','pre','code',
    ];

    // Safe attributes per tag (all others stripped)
    private array $allowedAttrs = [
        'a'          => ['href','title','target','rel'],
        'img'        => ['src','alt','width','height','loading'],
        'td'         => ['colspan','rowspan'],
        'th'         => ['colspan','rowspan','scope'],
        'blockquote' => ['cite'],
        '*'          => [], // no attrs on everything else
    ];

    public function handle(): int
    {
        $file = base_path($this->argument('file'));

        if (!file_exists($file)) {
            $this->error("File not found: {$file}");
            return 1;
        }

        $isDry      = $this->option('dry-run');
        $skipImages = $this->option('skip-images');
        $limit      = (int) $this->option('limit');
        $random     = $this->option('random');

        $this->info('');
        $this->info('=== WordPress Blog Importer ===');
        if ($isDry) $this->warn('DRY RUN — no writes will happen.');

        // ── Parse XML ─────────────────────────────────────────────────────────
        $this->info('Parsing XML...');
        libxml_use_internal_errors(true);
        $raw = ltrim(file_get_contents($file), "\xEF\xBB\xBF \t\r\n");
        $xml = simplexml_load_string($raw);
        if (!$xml) {
            foreach (libxml_get_errors() as $e) $this->error(trim($e->message));
            return 1;
        }

        $ns_wp      = 'http://wordpress.org/export/1.2/';
        $ns_content = 'http://purl.org/rss/1.0/modules/content/';
        $ns_excerpt = 'http://wordpress.org/export/1.2/excerpt/';

        // ── Build attachment map: WP post_id → image URL ──────────────────────
        $attachments = [];
        foreach ($xml->channel->item as $item) {
            $wp = $item->children($ns_wp);
            if ((string)$wp->post_type === 'attachment') {
                $id  = (int)$wp->post_id;
                $url = (string)$wp->attachment_url;
                if ($url) $attachments[$id] = $url;
            }
        }
        $this->line('Attachments mapped: ' . count($attachments));

        // ── Collect published posts ───────────────────────────────────────────
        $postItems = [];
        foreach ($xml->channel->item as $item) {
            $wp = $item->children($ns_wp);
            if ((string)$wp->post_type === 'post' && (string)$wp->status === 'publish') {
                $postItems[] = $item;
            }
        }
        $this->line('Published posts found: ' . count($postItems));

        // Apply limit / random
        if ($limit > 0) {
            if ($random) shuffle($postItems);
            $postItems = array_slice($postItems, 0, $limit);
            $this->line("Running with --limit={$limit}" . ($random ? ' --random' : ''));
        }

        // ── Ensure image storage dir ──────────────────────────────────────────
        if (!$isDry && !$skipImages) {
            Storage::disk('public')->makeDirectory($this->imageDir);
        }

        // ── Single author ─────────────────────────────────────────────────────
        $author = null;
        if (!$isDry) {
            $author = Author::firstOrCreate(
                ['slug' => 'dtech-team'],
                ['name' => 'DTech Team', 'bio' => 'The editorial team at DTech Corporation Ltd.']
            );
        }

        // ── Import loop ───────────────────────────────────────────────────────
        $imported = 0;
        $skipped  = 0;
        $errors   = 0;

        foreach ($postItems as $item) {
            $wp = $item->children($ns_wp);

            $wpId       = (int)    $wp->post_id;
            $slug       = (string) $wp->post_name;
            $title      = html_entity_decode((string)$item->title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $rawBody    = (string) $item->children($ns_content)->encoded;
            $rawExcerpt = (string) $item->children($ns_excerpt)->encoded;
            $pubDate    = (string) $wp->post_date_gmt;

            // Parse postmeta
            $meta = [];
            foreach ($wp->postmeta as $m) {
                $key = (string)$m->meta_key;
                $val = (string)$m->meta_value;
                $meta[$key] = $val;
            }

            // Parse categories and tags
            $categories = [];
            $tags       = [];
            foreach ($item->category as $cat) {
                $domain   = (string)$cat['domain'];
                $nicename = (string)$cat['nicename'];
                $name     = (string)$cat;
                if ($domain === 'category' && strtolower($name) !== 'uncategorized') {
                    $categories[$nicename] = $name;
                }
                if ($domain === 'post_tag') {
                    $tags[$nicename] = $name;
                }
            }

            // Skip if already imported
            if (!$isDry && Post::where('slug', $slug)->exists()) {
                $this->line("  [SKIP] Already exists: {$slug}");
                $skipped++;
                continue;
            }

            $this->line('');
            $this->info("  [POST #{$wpId}] {$title}");

            // ── Clean body ────────────────────────────────────────────────────
            $body = $this->cleanBody($rawBody);

            // ── Excerpt ───────────────────────────────────────────────────────
            $excerpt = trim(strip_tags($rawExcerpt));
            if (empty($excerpt)) {
                $excerpt = Str::limit(strip_tags($body), 200);
            }

            // ── SEO meta ──────────────────────────────────────────────────────
            $metaTitle = !empty($meta['_yoast_wpseo_title'])
                ? $this->cleanText($meta['_yoast_wpseo_title'])
                : $title . ' | DTech Corporation';
            // Yoast title often has %%sep%% %%sitename%% tokens — replace them
            $metaTitle = preg_replace('/\s*%%[^%]+%%\s*/', ' ', $metaTitle);
            $metaTitle = trim($metaTitle, ' -|');

            $metaDesc = !empty($meta['_yoast_wpseo_metadesc'])
                ? $this->cleanText($meta['_yoast_wpseo_metadesc'])
                : Str::limit(strip_tags($body), 155);

            // ── Featured image ────────────────────────────────────────────────
            $imagePath = null;
            $thumbnailId = isset($meta['_thumbnail_id']) ? (int)$meta['_thumbnail_id'] : 0;

            if ($thumbnailId && isset($attachments[$thumbnailId])) {
                $remoteUrl = $attachments[$thumbnailId];
                $filename  = basename(parse_url($remoteUrl, PHP_URL_PATH));
                $filename  = preg_replace('/[^a-zA-Z0-9._-]/', '-', $filename);
                $diskPath  = $this->imageDir . '/' . $filename;
                $publicUrl = '/storage/' . $diskPath;

                if (!$isDry) {
                    if ($skipImages || Storage::disk('public')->exists($diskPath)) {
                        $this->line("    Image: (exists) {$filename}");
                        $imagePath = $publicUrl;
                    } else {
                        $downloaded = $this->downloadImage($remoteUrl, $diskPath);
                        if ($downloaded) {
                            $this->line("    Image: ✓ {$filename}");
                            $imagePath = $publicUrl;
                        } else {
                            $this->warn("    Image: ✗ Failed to download {$remoteUrl}");
                        }
                    }
                } else {
                    $this->line("    Image: [DRY] would download {$filename}");
                    $imagePath = $publicUrl;
                }
            }

            // ── Rewrite any remaining blog.dtechcorpltd.com image URLs in body ─
            if ($imagePath) {
                $body = $this->rewriteBodyImages($body, $attachments);
            }

            // ── Write to DB ───────────────────────────────────────────────────
            if ($isDry) {
                $this->line("    Slug        : {$slug}");
                $this->line("    Title       : " . Str::limit($title, 80));
                $this->line("    Published   : {$pubDate}");
                $this->line("    Body chars  : " . strlen($body));
                $this->line("    Excerpt     : " . Str::limit($excerpt, 80));
                $this->line("    Meta title  : " . Str::limit($metaTitle, 80));
                $this->line("    Meta desc   : " . Str::limit($metaDesc, 80));
                $this->line("    Categories  : " . implode(', ', $categories));
                $this->line("    Tags        : " . implode(', ', $tags));
                $this->line("    Image path  : {$imagePath}");
                $imported++;
                continue;
            }

            try {
                $post = Post::create([
                    'title'                => $title,
                    'slug'                 => $slug,
                    'h1_title'             => $title,
                    'excerpt'              => $excerpt,
                    'body'                 => $body,
                    'status'               => 'published',
                    'author_id'            => $author->id,
                    'published_at'         => $pubDate ? \Carbon\Carbon::parse($pubDate) : now(),
                    'featured_image_path'  => $imagePath,
                    'meta_title'           => $metaTitle,
                    'meta_description'     => $metaDesc,
                ]);

                // Categories
                $catIds = [];
                foreach ($categories as $nicename => $name) {
                    $cat = Category::firstOrCreate(
                        ['slug' => $nicename],
                        ['name' => $name]
                    );
                    $catIds[] = $cat->id;
                }
                if ($catIds) $post->categories()->sync($catIds);

                // Tags
                $tagIds = [];
                foreach ($tags as $nicename => $name) {
                    $tag = Tag::firstOrCreate(
                        ['slug' => $nicename],
                        ['name' => $name]
                    );
                    $tagIds[] = $tag->id;
                }
                if ($tagIds) $post->tags()->sync($tagIds);

                $this->info("    ✓ Saved (ID: {$post->id})");
                $imported++;

            } catch (\Throwable $e) {
                $this->error("    ✗ Error: " . $e->getMessage());
                $errors++;
            }
        }

        // ── Summary ───────────────────────────────────────────────────────────
        $this->line('');
        $this->info('=== Done ===');
        $this->line("Imported : {$imported}");
        $this->line("Skipped  : {$skipped}");
        $this->line("Errors   : {$errors}");

        return 0;
    }

    // ── Body cleaner ──────────────────────────────────────────────────────────

    private function cleanBody(string $html): string
    {
        // 1. Strip WordPress block comments: <!-- wp:heading --> etc.
        $html = preg_replace('/<!--\s*\/?wp:[^>]*-->/s', '', $html);

        // 2. Strip lazy-felix browser-extension buttons (entire element + contents)
        $html = preg_replace(
            '/<button\b[^>]*class="[^"]*lazy-felix[^"]*"[^>]*>.*?<\/button>/is',
            '',
            $html
        );

        // 3. Strip zero-width / invisible chars + WordPress checkbox characters (□ ☐ ☑ ☒)
        $html = preg_replace('/[\x{200B}-\x{200D}\x{FEFF}\x{00AD}\x{25A1}\x{2610}-\x{2612}]/u', '', $html);

        // 4. Rewrite localhost development links to # (they're internal cross-links)
        $html = preg_replace(
            '/href="https?:\/\/localhost[^"]*"/i',
            'href="#"',
            $html
        );

        // 5. Strip dangerous tags entirely (with their content where appropriate)
        $html = preg_replace(
            '/<(script|style|iframe|object|embed|applet|form|input|select|textarea|link|meta|base|svg|math|template|canvas)\b[^>]*>.*?<\/\1>/is',
            '',
            $html
        );
        // Also self-closing dangerous tags
        $html = preg_replace(
            '/<(script|style|iframe|object|embed|applet|form|input|select|link|meta|base)\b[^>]*\/?>/i',
            '',
            $html
        );

        // 6. Strip on* event attributes
        $html = preg_replace('/\s+on[a-z]+\s*=\s*(?:"[^"]*"|\'[^\']*\'|[^\s>]+)/i', '', $html);

        // 7. Strip javascript: and vbscript: from href/src/action
        $html = preg_replace('/\b(href|src|action)\s*=\s*["\']?\s*(javascript|vbscript)\s*:[^"\'>\s]*/i', '$1="#"', $html);

        // 8. Sanitize attributes — keep only safe ones per allowed-tag rules
        $html = $this->sanitizeAttributes($html);

        // 9. Clean up WP block wrapper classes (keep tag, strip class)
        $html = preg_replace('/(<(?:h[1-6]|p|ul|ol|li|blockquote|figure|figcaption|table|thead|tbody|tr|td|th)\b)[^>]*(>)/i', '$1$2', $html);

        // 10. Clean up empty paragraphs and excessive whitespace
        $html = preg_replace('/<p>\s*(&nbsp;|\s)*<\/p>/i', '', $html);
        $html = preg_replace('/\n{3,}/', "\n\n", $html);

        // 11. Fix &amp;nbsp; double-encoding
        $html = str_replace('&amp;nbsp;', '&nbsp;', $html);

        return trim($html);
    }

    private function sanitizeAttributes(string $html): string
    {
        // For each tag, strip any attribute not in the allowlist
        return preg_replace_callback(
            '/<([a-z][a-z0-9]*)\b([^>]*)>/i',
            function ($m) {
                $tag   = strtolower($m[1]);
                $attrs = $m[2];

                if (!in_array($tag, $this->allowedTags)) {
                    return $m[0]; // we'll handle disallowed tags separately
                }

                $allowed = $this->allowedAttrs[$tag] ?? $this->allowedAttrs['*'];
                if (empty($allowed)) {
                    return "<{$tag}>";
                }

                // Extract individual attributes
                preg_match_all(
                    '/([a-z][a-z0-9-]*)(?:\s*=\s*(?:"([^"]*)"|\'([^\']*)\'|([^\s>]*)))?/i',
                    $attrs,
                    $attrMatches,
                    PREG_SET_ORDER
                );

                $safe = '';
                foreach ($attrMatches as $a) {
                    $attrName = strtolower($a[1]);
                    if (!in_array($attrName, $allowed)) continue;
                    $val = $a[2] ?? $a[3] ?? $a[4] ?? '';

                    // Extra safety: no javascript: in any attribute value
                    if (preg_match('/^\s*(javascript|vbscript|data\s*:)/i', $val)) continue;

                    // Force external links to have safe rel
                    if ($attrName === 'target' && $val === '_blank') {
                        $safe .= ' target="_blank"';
                        // We'll add rel below when we see the full tag
                        continue;
                    }

                    $safe .= " {$attrName}=\"" . htmlspecialchars($val, ENT_QUOTES, 'UTF-8', false) . '"';
                }

                // If tag has target="_blank", ensure rel="noopener noreferrer"
                if (str_contains($safe, 'target="_blank"') && !str_contains($safe, 'rel=')) {
                    $safe .= ' rel="noopener noreferrer"';
                }

                return "<{$tag}{$safe}>";
            },
            $html
        );
    }

    private function rewriteBodyImages(string $html, array $attachments): string
    {
        // Rewrite any inline src pointing at blog.dtechcorpltd.com to local storage
        return preg_replace_callback(
            '/src="(https?:\/\/blog\.dtechcorpltd\.com\/wp-content\/uploads\/[^"]+)"/i',
            function ($m) {
                $filename  = basename(parse_url($m[1], PHP_URL_PATH));
                $filename  = preg_replace('/[^a-zA-Z0-9._-]/', '-', $filename);
                $diskPath  = $this->imageDir . '/' . $filename;
                if (Storage::disk('public')->exists($diskPath)) {
                    return 'src="/storage/' . $diskPath . '"';
                }
                // Not downloaded yet — keep original src (safe, it's own domain)
                return $m[0];
            },
            $html
        );
    }

    private function downloadImage(string $url, string $diskPath): bool
    {
        try {
            $ctx = stream_context_create([
                'http' => [
                    'timeout'    => 20,
                    'user_agent' => 'Mozilla/5.0 DTechImporter/1.0',
                    'method'     => 'GET',
                ],
                'ssl' => [
                    'verify_peer'      => false,
                    'verify_peer_name' => false,
                ],
            ]);

            $data = @file_get_contents($url, false, $ctx);
            if ($data === false || strlen($data) < 100) return false;

            // Verify it's actually an image
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime  = $finfo->buffer($data);
            if (!str_starts_with($mime, 'image/')) {
                $this->warn("    Skipping non-image MIME ({$mime}): {$url}");
                return false;
            }

            Storage::disk('public')->put($diskPath, $data);
            return true;

        } catch (\Throwable $e) {
            $this->warn("    Download error: " . $e->getMessage());
            return false;
        }
    }

    private function cleanText(string $text): string
    {
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = strip_tags($text);
        $text = preg_replace('/[\x{200B}-\x{200D}\x{FEFF}]/u', '', $text);
        return trim($text);
    }
}
