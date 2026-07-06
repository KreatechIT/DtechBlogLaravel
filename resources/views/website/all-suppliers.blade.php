@extends('layouts.website')

@section('page-meta')
@php
    $pageTitle = 'Our Suppliers || DTech Corporation';
    $pageDescription = 'The trusted suppliers and partners DTech Corporation works with for facade design and construction materials.';
@endphp
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">
<x-json-ld type="WebPage" :data="['name' => $pageTitle, 'description' => $pageDescription, 'url' => url()->current()]" />
@endsection

@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Our Suppliers' :pageLinks="['website.home' => 'Home', 'website.about' => 'Our Suppliers']" />
<!-- End of Breadcrumb section -->

<!-- Start of clients section -->
<section id="arck-service" class="arck-service-section">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($suppliers as $key => $supplier)
                <div class="col-lg-2 col-6 col-sm-4 mb-2">
                    <img src="{{ asset($supplier['image']) }}" class="p-2" title="{{ $supplier['altText'] }}" alt="{{ $supplier['altText'] }}" loading="lazy">
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End of clients section -->
@endsection
