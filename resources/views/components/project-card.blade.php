@props(['image', 'category', 'title', 'shortDes', 'pageLink', 'cardClass'])


<div class="grid-item grid-size-25 {{ $cardClass }}" data-category="{{ $cardClass }}">
    <div class="arck-project-item position-relative two">
        <div class="inner-img">
            <img src="{{ asset($image) }}" alt="{{ $title }}" loading="lazy">
        </div>
        <div class="inner-text">
            <div class="project-title-desc headline pera-content">
                <span class="text-uppercase item-category"><a href="#">{{ $category }}</a></span>
                <h3 class="text-uppercase"><a href="{{ $pageLink }}">{!! $title !!}</a></h3>
                <p>{!! $shortDes !!}</p>
            </div>
        </div>
        @if(strlen($pageLink) > 1)
            <div class="view-more-btn text-uppercase position-absolute">
                <a href="{{ $pageLink }}">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
        @endif
    </div>
</div>
