@extends('layouts.website')

@section('page-meta')
@php
    $pageTitle = 'Dtech Corp Ltd Products Are Cst Covers, Durlum, Bond Alpolic';
    $pageDescription = 'Dtech Corporation partners with quality products - CST covers, Momentive, Durlum, Bond, Alpolic Mitsubishi Plastics. Leading the way in excellence.';
@endphp
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">
<x-json-ld type="WebPage" :data="['name' => $pageTitle, 'description' => $pageDescription, 'url' => url()->current()]" />
@endsection


@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Products' :pageLinks="['website.home' => 'Home', 'website.products' => 'Products']" />
<!-- End of Breadcrumb section -->

<section id="arck-blog-feed" class="arck-blog-feed-section inner-page-padding">
    <div class="container">
        <div class="arck-blog-feed-content-wrap">
            <div class="row">
                @foreach ($products as $key => $product)
                    <div class="col-md-4">
                        <x-dtech-product-card image="{{ $product['image'] }}"  title="{{ $product['title'] }}" pageLink="{{ $product['pageLink'] }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
