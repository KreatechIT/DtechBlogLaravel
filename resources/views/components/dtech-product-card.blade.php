@props(['image', 'title', 'pageLink'])

<div class="arck-blog-item-2">
    <div class="inner-img">
        <img src="{{ asset($image) }}" alt="{{ $title }}">
    </div>
    <div class="inner-text headline pera-content">
        <h3><a href="{{ $pageLink }}">{{ $title }}</a></h3>
        <a class="read-more-btn text-uppercase" href="{{ $pageLink }}" target="__blank"> read more <i class="fas fa-arrow-right"></i></a>
    </div>
</div>
