@props(['authorImage', 'authorName', 'authorDesignation', 'authorReview'])

<div class="arck-teestimonial-item">
    <div class="inner-text position-relative">
        <i class="fas fa-quote-left"></i> {{ $authorReview }}
    </div>
    <div class="inner-author">
        <div class="author-img">
            <img src="{{ $authorImage }}" alt="{{ $authorName }}" loading="lazy">
        </div>
        <div class="author-text headline">
            <h3>{{ $authorName }}</h3>
            <span>{{ $authorDesignation }}</span>
        </div>
    </div>
</div>
