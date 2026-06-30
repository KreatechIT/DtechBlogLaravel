@extends('layouts.website')

@section('page-meta')
{{-- ── SEO meta ─────────────────────────────────────────────────────────────── --}}
<title>{{ $post->meta_title ?? ($post->h1_title ?? $post->title) }} | DTech Blog</title>
<meta name="description" content="{{ $post->meta_description ?? $post->excerpt }}">
<link rel="canonical" href="{{ $post->canonical_url ?? url('/blog/' . $post->slug) }}">
@if($post->meta_robots)
<meta name="robots" content="{{ $post->meta_robots }}">
@endif

{{-- OG tags --}}
<meta property="og:type"        content="article">
<meta property="og:url"         content="{{ $post->canonical_url ?? url('/blog/' . $post->slug) }}">
<meta property="og:title"       content="{{ $post->og_title ?? $post->meta_title ?? $post->title }}">
<meta property="og:description" content="{{ $post->og_description ?? $post->meta_description ?? $post->excerpt }}">
@if($post->og_image_path)
<meta property="og:image" content="{{ asset('storage/' . $post->og_image_path) }}">
@elseif($post->featured_image_url)
<meta property="og:image" content="{{ $post->featured_image_url }}">
@endif
<meta property="article:published_time" content="{{ ($post->published_at ?? $post->created_at)->toIso8601String() }}">
<meta property="article:modified_time" content="{{ $post->updated_at->toIso8601String() }}">

{{-- Twitter card --}}
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="{{ $post->og_title ?? $post->title }}">
<meta name="twitter:description" content="{{ $post->og_description ?? $post->meta_description ?? $post->excerpt }}">
@if($post->featured_image_url)
<meta name="twitter:image" content="{{ $post->featured_image_url }}">
@endif

{{-- Schema.org BlogPosting --}}
@if($post->schema_output)
<script type="application/ld+json">{!! $post->schema_output !!}</script>
@else
<script type="application/ld+json">
{!! json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BlogPosting',
    'headline'        => $post->meta_title ?? $post->h1_title ?? $post->title,
    'image'           => $post->featured_image_url ?? asset('assets/img/logo/dtech_logo_new.png'),
    'datePublished'   => ($post->published_at ?? $post->created_at)->toIso8601String(),
    'dateModified'    => $post->updated_at->toIso8601String(),
    'author'          => ['@type' => 'Person', 'name' => $post->author?->name ?? 'DTech Corporation'],
    'publisher'       => [
        '@type' => 'Organization',
        'name'  => 'DTech Corporation Ltd',
        'logo'  => ['@type' => 'ImageObject', 'url' => asset('assets/img/logo/dtech_logo_new.png')],
    ],
    'description'     => $post->meta_description ?? $post->excerpt ?? '',
    'url'             => $post->canonical_url ?? url('/blog/' . $post->slug),
    'mainEntityOfPage'=> ['@type' => 'WebPage', '@id' => $post->canonical_url ?? url('/blog/' . $post->slug)],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif
@endsection

@push('styles')
<style>
/* ─── Reading progress bar ──────────────────────────────── */
#reading-progress {
    position: fixed;
    top: 0; left: 0;
    height: 3px;
    width: 0;
    background: var(--main-color);
    z-index: 9999;
    transition: width .08s linear;
}

/* ─── Skeleton for featured image ───────────────────────── */
@keyframes single-shimmer {
    0%   { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}
.img-skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e6e6e6 50%, #f0f0f0 75%);
    background-size: 400% 100%;
    animation: single-shimmer 1.4s ease infinite;
}
.featured-img-loader {
    height: 460px;
    width: 100%;
}

/* ─── Article featured image ────────────────────────────── */
.blog-detail-hero {
    width: 100%;
    max-height: 480px;
    object-fit: cover;
    display: block;
}

/* ─── Article title / H1 ────────────────────────────────── */
.arck-blog-details-text-wrap h1.post-title {
    color: var(--black-color);
    font-size: 30px;
    font-weight: 700;
    line-height: 1.35;
    padding-bottom: 20px;
    font-family: var(--heading);
}

/* ─── Meta bar ──────────────────────────────────────────── */
.post-meta-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    margin-bottom: 22px;
    font-size: 14px;
    color: #888;
    align-items: center;
}
.post-meta-bar a { color: inherit; }
.post-meta-bar a:hover { color: var(--main-color); }
.post-meta-bar i { color: var(--main-color); margin-right: 5px; }

/* ─── Body content ──────────────────────────────────────── */
.blog-body-content { line-height: 1.875; }
.blog-body-content p        { padding-bottom: 24px; }
.blog-body-content h2       { font-size: 26px; font-weight: 700; color: var(--black-color); padding-bottom: 16px; padding-top: 10px; }
.blog-body-content h3       { font-size: 22px; font-weight: 600; color: var(--black-color); padding-bottom: 12px; padding-top: 6px; }
.blog-body-content ul,
.blog-body-content ol       { padding-left: 22px; margin-bottom: 24px; }
.blog-body-content li       { margin-bottom: 8px; }
.blog-body-content img      { max-width: 100%; height: auto; border-radius: 2px; margin: 10px 0 24px; }
.blog-body-content blockquote {
    font-size: 19px; line-height: 1.7;
    padding: 12px 50px; margin-bottom: 28px;
    border-left: 5px solid var(--main-color);
    font-family: var(--heading); color: var(--black-color);
}
.blog-body-content a { color: var(--main-color); text-decoration: underline; }
.blog-body-content table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
.blog-body-content th,
.blog-body-content td  { border: 1px solid #e5e5e5; padding: 10px 14px; text-align: left; }
.blog-body-content th  { background: #f4f4f4; font-weight: 600; }

/* ─── Tags / Share row ──────────────────────────────────── */
.post-share-tag {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 20px 40px 28px;
    border-top: 1px solid #ebebeb;
}
.post-tags { display: flex; flex-wrap: wrap; align-items: center; gap: 8px; }
.post-tags .tag-label { font-size: 14px; font-weight: 600; color: var(--black-color); margin-right: 2px; }
.post-tags a {
    font-size: 12px; padding: 5px 13px; background: #f4f4f4;
    color: #555; display: inline-block; transition: .25s;
}
.post-tags a:hover { background: var(--main-color); color: #fff; }
.post-share { display: flex; align-items: center; gap: 10px; }
.post-share .share-label { font-size: 15px; font-weight: 600; color: var(--black-color); }
.post-share a {
    width: 36px; height: 36px; border-radius: 50%;
    display: inline-flex; align-items: center; justify-content: center;
    background: #f4f4f4; color: var(--black-color);
    font-size: 14px; transition: .25s;
}
.post-share a:hover { background: var(--main-color); color: #fff; }

/* ─── Author box ────────────────────────────────────────── */
.post-author-box {
    display: flex; align-items: center; gap: 28px;
    background: #fff;
    box-shadow: 0 5px 50px rgba(110,110,110,.1);
    padding: 36px 30px; margin-top: 50px; margin-bottom: 30px;
}
.post-author-avatar {
    width: 100px; height: 100px; border-radius: 50%;
    overflow: hidden; flex-shrink: 0;
    background: #f4f4f4; display: flex; align-items: center; justify-content: center;
}
.post-author-avatar img { width: 100%; height: 100%; object-fit: cover; }
.post-author-info h4 { font-size: 20px; font-weight: 700; color: var(--black-color); margin-bottom: 6px; font-family: var(--heading); }
.post-author-info p  { font-size: 14px; color: #777; line-height: 1.7; margin: 0; }

/* ─── Back to blog btn ──────────────────────────────────── */
.back-to-blog {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: 14px; font-weight: 700; font-family: var(--heading);
    color: var(--black-color); text-transform: uppercase; letter-spacing: .5px;
    margin-bottom: 28px; text-decoration: none; transition: color .25s;
}
.back-to-blog:hover { color: var(--main-color); }
.back-to-blog i { font-size: 12px; }

/* ─── Sidebar related post images ───────────────────────── */
.arck-side-bar-widget .recent-blog-img { flex-shrink: 0; }
.arck-side-bar-widget .recent-blog-img img,
.arck-side-bar-widget .recent-blog-img .img-placeholder {
    width: 72px; height: 72px; object-fit: cover; border-radius: 4px; display: block;
}
.arck-side-bar-widget .recent-blog-img .img-placeholder {
    background: #f4f4f4; display: flex; align-items: center; justify-content: center; color: #ccc;
}
.arck-side-bar-widget .widget-title { font-family: var(--heading); }
.arck-side-bar-widget .recent-blog-img-text { display: flex; align-items: flex-start; }
.arck-side-bar-widget .recent-blog-text { flex: 1; min-width: 0; }
.arck-side-bar-widget .recent-blog-text h3 a { color: var(--black-color); transition: color .25s; }
.arck-side-bar-widget .recent-blog-text h3 a:hover { color: var(--main-color); }

/* ─── Category count badge ──────────────────────────────── */
.arck-side-bar-widget .category-widget li a span {
    background: transparent;
    font-size: 13px; color: #aaa;
    padding: 0; float: right;
}
.arck-side-bar-widget .category-widget li a span:before,
.arck-side-bar-widget .category-widget li a span:after { display: none; }
</style>
@endpush

@section('page-content')

{{-- ── Reading progress ── --}}
<div id="reading-progress"></div>

{{-- ── Breadcrumb ── --}}
<x-breadcrumb image="assets/img/bg/ar-shape.png"
    activePage="{{ $post->h1_title ?? $post->title }}"
    :pageLinks="['website.home' => 'Home', 'website.blog' => 'Blog']" />

{{-- ── Main content ── --}}
<section class="arck-blog-section" style="padding: 80px 0 100px;">
    <div class="container">
        <div class="row g-5">

            {{-- ── Article column ─────────────────── --}}
            <div class="col-lg-8">

                <a href="{{ route('website.blog') }}" class="back-to-blog">
                    <i class="fas fa-arrow-left"></i> Back to Blog
                </a>

                <div class="arck-blog-details-main-content">

                    {{-- Featured image with skeleton --}}
                    @if($post->featured_image_url)
                    <div style="position:relative; overflow:hidden;">
                        <div id="img-skel" class="img-skeleton featured-img-loader"></div>
                        <img id="hero-img"
                             src="{{ $post->featured_image_url }}"
                             alt="{{ $post->featured_image_alt ?? ($post->h1_title ?? $post->title) }}"
                             class="blog-detail-hero"
                             loading="lazy"
                             style="display:none;"
                             onload="this.style.display='block'; document.getElementById('img-skel').style.display='none';">
                    </div>
                    @endif

                    {{-- Text content --}}
                    <div class="arck-blog-details-text-wrap">

                        {{-- Meta bar --}}
                        <div class="post-meta-bar">
                            @if($post->categories->count())
                                @foreach($post->categories as $cat)
                                <a class="blog-cat" href="{{ route('website.blog') }}?category={{ $cat->slug }}">
                                    {{ $cat->name }}
                                </a>
                                @endforeach
                            @endif
                            <span>
                                <i class="far fa-calendar-alt"></i>
                                {{ ($post->published_at ?? $post->created_at)->format('F d, Y') }}
                            </span>
                            @if($post->author)
                            <span>
                                <i class="far fa-user"></i>
                                {{ $post->author->name }}
                            </span>
                            @endif
                        </div>

                        {{-- H1 --}}
                        <h1 class="post-title">{{ $post->h1_title ?? $post->title }}</h1>

                        {{-- Body --}}
                        @if($post->body)
                        <div class="blog-body-content">
                            {!! $post->body !!}
                        </div>
                        @elseif($post->excerpt)
                        <div class="blog-body-content">
                            <p>{{ $post->excerpt }}</p>
                        </div>
                        @endif

                    </div>{{-- /.arck-blog-details-text-wrap --}}

                    {{-- Tags / Share --}}
                    @if($post->tags->count() || true)
                    <div class="post-share-tag">
                        <div class="post-tags">
                            @if($post->tags->count())
                            <span class="tag-label">Tags:</span>
                            @foreach($post->tags as $tag)
                            <a href="#">#{{ $tag->name }}</a>
                            @endforeach
                            @endif
                        </div>
                        <div class="post-share">
                            <span class="share-label">Share:</span>
                            @php
                                $shareUrl   = urlencode($post->canonical_url ?? url('/blog/' . $post->slug));
                                $shareTitle = urlencode($post->title);
                            @endphp
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                               target="_blank" rel="noopener" title="Share on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}"
                               target="_blank" rel="noopener" title="Share on X / Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}"
                               target="_blank" rel="noopener" title="Share on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}"
                               target="_blank" rel="noopener" title="Share on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                    @endif

                </div>{{-- /.arck-blog-details-main-content --}}

                {{-- ── Author box ── --}}
                @if($post->author)
                <div class="post-author-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="post-author-avatar">
                        @if($post->author->avatar_path)
                        <img src="{{ asset('storage/' . $post->author->avatar_path) }}"
                             alt="{{ $post->author->name }}" loading="lazy">
                        @else
                        <i class="far fa-user fa-2x" style="color:#ccc;"></i>
                        @endif
                    </div>
                    <div class="post-author-info">
                        <h4>{{ $post->author->name }}</h4>
                        @if($post->author->bio)
                        <p>{{ $post->author->bio }}</p>
                        @else
                        <p>DTech Corporation Ltd — Facade Design &amp; Engineering Specialists in Bangladesh.</p>
                        @endif
                    </div>
                </div>
                @endif

            </div>{{-- /.col-lg-8 --}}

            {{-- ── Sidebar column ──────────────────── --}}
            <div class="col-lg-4">

                {{-- Related posts --}}
                @if($related->count())
                <div class="arck-side-bar-widget wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1000ms">
                    <h3 class="widget-title">Related Posts</h3>
                    @foreach($related as $relPost)
                    <div class="recent-blog-img-text" style="padding-bottom:22px; {{ !$loop->last ? 'margin-bottom:0;' : '' }}">
                        <div class="recent-blog-img" style="margin-right:14px;">
                            @if($relPost->featured_image_url)
                            <img src="{{ $relPost->featured_image_url }}"
                                 alt="{{ $relPost->title }}" loading="lazy">
                            @else
                            <div class="img-placeholder">
                                <i class="far fa-image" style="font-size:18px;"></i>
                            </div>
                            @endif
                        </div>
                        <div class="recent-blog-text headline">
                            <h3>
                                <a href="{{ route('website.blog.single', $relPost->slug) }}">
                                    {{ Str::limit($relPost->h1_title ?? $relPost->title, 55) }}
                                </a>
                            </h3>
                            <span>
                                <i class="far fa-calendar-alt" style="color:var(--main-color); font-size:12px; margin-right:4px;"></i>
                                {{ ($relPost->published_at ?? $relPost->created_at)->format('M d, Y') }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                {{-- Categories --}}
                @if($allCategories->count())
                <div class="arck-side-bar-widget wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="category-widget" style="list-style:none; padding:0; margin:0;">
                        @foreach($allCategories as $cat)
                        <li>
                            <a href="{{ route('website.blog') }}?category={{ $cat->slug }}"
                               style="display:flex; justify-content:space-between;">
                                {{ $cat->name }}
                                <span>({{ $cat->posts_count }})</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{-- Tags --}}
                @if($allTags->count())
                <div class="arck-side-bar-widget wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1000ms">
                    <h3 class="widget-title">Tags</h3>
                    <div class="popular-tag-widget">
                        @foreach($allTags as $tag)
                        <a href="#">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>{{-- /.col-lg-4 --}}

        </div>{{-- /.row --}}
    </div>{{-- /.container --}}
</section>

@endsection

@push('scripts')
<script>
(function () {
    /* ── Reading progress bar ── */
    var bar = document.getElementById('reading-progress');
    if (bar) {
        window.addEventListener('scroll', function () {
            var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            var docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            bar.style.width = (docHeight > 0 ? (scrollTop / docHeight) * 100 : 0) + '%';
        }, { passive: true });
    }

    /* ── Featured image fallback: reveal after 3 s if onload doesn't fire ── */
    var imgSkel  = document.getElementById('img-skel');
    var heroImg  = document.getElementById('hero-img');
    if (imgSkel && heroImg) {
        setTimeout(function () {
            if (imgSkel.style.display !== 'none') {
                imgSkel.style.display = 'none';
                heroImg.style.display = 'block';
            }
        }, 3000);
    }

    /* ── Lazy-load body images via IntersectionObserver ── */
    if ('IntersectionObserver' in window) {
        var lazyImgs = document.querySelectorAll('.blog-body-content img[loading="lazy"]');
        lazyImgs.forEach(function (img) {
            img.setAttribute('loading', 'lazy'); // ensure attribute
        });
    }
})();
</script>
@endpush
