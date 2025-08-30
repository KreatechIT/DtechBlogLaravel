@props(['image', 'altText'])

<div class="arck-sponsor-slider-item">
    <img src="{{ asset($image) }}"  alt="{{ $altText }}" loading="lazy">
</div>
