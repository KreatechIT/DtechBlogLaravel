@extends('layouts.website')

@section('page-meta')
<title>Blog &mdash; Facade Design & Engineering Insights | DTech Corporation Ltd</title>
<meta name="description" content="Read the latest articles, case studies and industry insights from DTech Corporation on facade design, engineering solutions and construction in Bangladesh.">
<link rel="canonical" href="{{ url('/blog') }}">
<meta property="og:title" content="DTech Blog — Facade Design & Engineering Insights">
<meta property="og:description" content="Latest articles and case studies from DTech Corporation Ltd.">
<meta property="og:url" content="{{ url('/blog') }}">
<meta property="og:type" content="website">
@endsection

@push('styles')
<style>
/* ─── Skeleton shimmer ──────────────────────────────────────── */
@keyframes blog-shimmer {
    0%   { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}
.skeleton-card {
    background: #fff;
    box-shadow: 0 0 30px rgba(0,0,0,.07);
    overflow: hidden;
    margin-bottom: 0;
}
.skeleton-pulse {
    background: linear-gradient(90deg, #f0f0f0 25%, #e6e6e6 50%, #f0f0f0 75%);
    background-size: 400% 100%;
    animation: blog-shimmer 1.4s ease infinite;
}
.skeleton-img  { height: 220px; }
.skeleton-body { padding: 22px 20px 26px; }
.skeleton-line { height: 13px; border-radius: 4px; margin-bottom: 11px; }
.skeleton-line.w-30  { width: 30%; }
.skeleton-line.w-60  { width: 60%; }
.skeleton-line.w-80  { width: 80%; }
.skeleton-line.w-100 { width: 100%; }
.skeleton-btn { height: 36px; width: 110px; border-radius: 2px; margin-top: 10px; }

/* ─── Blog card ─────────────────────────────────────────────── */
.blog-card-img-wrap {
    position: relative;
    overflow: hidden;
    height: 220px;
    display: block;
    background: #f4f4f4;
}
.blog-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 500ms ease;
    display: block;
}
.arck-blog-item:hover .blog-card-img-wrap img {
    transform: scale(1.08);
}
.blog-card-no-img {
    height: 220px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f4f4f4;
    color: #ccc;
    font-size: 46px;
    text-decoration: none;
}
.blog-cat-badge {
    position: absolute;
    bottom: 14px;
    left: 14px;
    z-index: 1;
}
.blog-cat-badge span {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .6px;
    text-transform: uppercase;
    color: #fff;
    background: var(--main-color);
    padding: 5px 11px;
    display: inline-block;
}

/* ─── Card text ─────────────────────────────────────────────── */
.arck-blog-item .inner-text {
    padding: 24px 22px 22px;
}
.arck-blog-item .inner-text .blog-meta {
    margin-bottom: 14px;
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    font-size: 13px;
    color: #888;
}
.arck-blog-item .inner-text .blog-meta i {
    color: var(--main-color);
    margin-right: 4px;
}
.arck-blog-item .inner-text h3 {
    font-size: 17px;
    line-height: 1.5;
    padding-bottom: 10px;
}
.arck-blog-item .inner-text h3 a {
    color: var(--black-color);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: color .3s;
}
.arck-blog-item .inner-text h3 a:hover { color: var(--main-color); }
.arck-blog-item .inner-text p {
    font-size: 14px;
    line-height: 1.75;
    padding-bottom: 18px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.arck-blog-item .read-more-btn {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .4px;
}

/* ─── Pagination ────────────────────────────────────────────── */
.blog-pagination .pagination {
    gap: 5px;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0;
}
.blog-pagination .page-link {
    min-width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #e0e0e0;
    color: var(--black-color);
    font-weight: 600;
    font-family: var(--heading);
    border-radius: 0 !important;
    padding: 0 12px;
    transition: .25s;
    text-decoration: none;
    font-size: 14px;
}
.blog-pagination .page-link:hover,
.blog-pagination .page-item.active .page-link {
    background: var(--main-color);
    border-color: var(--main-color);
    color: #fff;
    box-shadow: none;
}
.blog-pagination .page-item.disabled .page-link { opacity: .4; pointer-events: none; }

/* ─── Empty state ───────────────────────────────────────────── */
.blog-empty { padding: 80px 20px; text-align: center; }
.blog-empty i { font-size: 72px; color: #e0e0e0; display: block; margin-bottom: 24px; }
.blog-empty h4 { font-size: 22px; color: #aaa; font-family: var(--heading); margin-bottom: 8px; }
.blog-empty p  { color: #ccc; font-size: 15px; }
</style>
@endpush

@section('page-content')

{{-- ── Breadcrumb ── --}}
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage="Blog"
    :pageLinks="['website.home' => 'Home', 'website.blog' => 'Blog']" />

{{-- ── Blog Feed Section ── --}}
<section class="arck-blog-section" style="padding: 80px 0 100px;">
    <div class="container">

        {{-- ──────────────────────────────────────────── --}}
        {{-- SKELETON — visible until JS reveals content  --}}
        {{-- ──────────────────────────────────────────── --}}
        <div id="blog-skeleton" class="row g-4" aria-hidden="true">
            @for ($i = 0; $i < 12; $i++)
            <div class="col-lg-3 col-md-6">
                <div class="skeleton-card">
                    <div class="skeleton-img skeleton-pulse"></div>
                    <div class="skeleton-body">
                        <div class="skeleton-line w-30 skeleton-pulse" style="margin-bottom:16px;"></div>
                        <div class="skeleton-line w-100 skeleton-pulse"></div>
                        <div class="skeleton-line w-80  skeleton-pulse"></div>
                        <div class="skeleton-line w-60  skeleton-pulse" style="margin-top:4px;"></div>
                        <div class="skeleton-btn skeleton-pulse"></div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        {{-- ──────────────────────────────────────────── --}}
        {{-- REAL CONTENT — revealed after window.load    --}}
        {{-- ──────────────────────────────────────────── --}}
        <div id="blog-content" style="display:none;">

            @if($posts->count())
            <div class="row g-4">
                @foreach($posts as $i => $post)
                <div class="col-lg-3 col-md-6 wow fadeInUp"
                     data-wow-delay="{{ ($i % 4) * 80 }}ms"
                     data-wow-duration="900ms">

                    <article class="arck-blog-item">

                        {{-- Image block --}}
                        @if($post->featured_image_url)
                        <a href="{{ route('website.blog.single', $post->slug) }}"
                           class="blog-card-img-wrap">
                            <img src="{{ $post->featured_image_url }}"
                                 alt="{{ $post->featured_image_alt ?? $post->title }}"
                                 loading="lazy">
                            @if($post->categories->count())
                            <div class="blog-cat-badge">
                                <span>{{ $post->categories->first()->name }}</span>
                            </div>
                            @endif
                        </a>
                        @else
                        <a href="{{ route('website.blog.single', $post->slug) }}"
                           class="blog-card-no-img">
                            <i class="far fa-image"></i>
                        </a>
                        @endif

                        {{-- Text block --}}
                        <div class="inner-text headline pera-content">

                            <div class="blog-meta">
                                <span>
                                    <i class="far fa-calendar-alt"></i>
                                    {{ ($post->published_at ?? $post->created_at)->format('M d, Y') }}
                                </span>
                                @if($post->author)
                                <span>
                                    <i class="far fa-user"></i>
                                    {{ $post->author->name }}
                                </span>
                                @endif
                            </div>

                            <h3>
                                <a href="{{ route('website.blog.single', $post->slug) }}">
                                    {{ $post->h1_title ?? $post->title }}
                                </a>
                            </h3>

                            @if($post->excerpt)
                            <p>{{ $post->excerpt }}</p>
                            @endif

                            <a class="read-more-btn text-uppercase"
                               href="{{ route('website.blog.single', $post->slug) }}">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </article>
                </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if($posts->hasPages())
            <div class="blog-pagination mt-5 d-flex justify-content-center">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
            @endif

            @else
            <div class="blog-empty">
                <i class="far fa-newspaper"></i>
                <h4>No posts published yet.</h4>
                <p>Check back soon for the latest insights from DTech Corporation.</p>
            </div>
            @endif

        </div>{{-- /#blog-content --}}

    </div>
</section>

@endsection

@push('scripts')
<script>
(function () {
    function revealBlog() {
        var skeleton = document.getElementById('blog-skeleton');
        var content  = document.getElementById('blog-content');
        if (skeleton) skeleton.style.display = 'none';
        if (content)  { content.style.display = ''; }
        if (typeof WOW !== 'undefined') {
            new WOW({ live: false }).init();
        }
    }
    if (document.readyState === 'complete') {
        revealBlog();
    } else {
        window.addEventListener('load', revealBlog);
        // Fallback: reveal after 2.5 s even if load never fires
        setTimeout(revealBlog, 2500);
    }
})();
</script>
@endpush
