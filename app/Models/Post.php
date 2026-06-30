<?php

namespace App\Models;

use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

#[ObservedBy(PostObserver::class)]
class Post extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title', 'slug', 'h1_title', 'excerpt', 'body', 'status',
        'author_id', 'published_at', 'featured_image_path',
        'featured_image_alt', 'featured_image_width', 'featured_image_height',
        'featured_image_srcset', 'content_blocks',
        'meta_title', 'meta_description', 'schema_output', 'primary_schema_type',
        'canonical_url', 'meta_robots', 'og_title', 'og_description', 'og_image_path',
    ];

    protected $casts = [
        'content_blocks' => 'array',
        'published_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(function (Post $post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured-image')->singleFile();
        $this->addMediaCollection('body-images');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_post');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function getFeaturedImageUrlAttribute(): ?string
    {
        $media = $this->getFirstMedia('featured-image');
        if ($media) {
            return $media->getUrl();
        }
        return $this->featured_image_path ?: null;
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->where(function ($q) {
                $q->whereNull('published_at')->orWhere('published_at', '<=', now());
            });
    }
}
