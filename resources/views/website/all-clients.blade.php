@extends('layouts.website')

@section('page-meta')
<title>Our Clients || DTech Corporation</title>
@endsection

@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Our Clients' :pageLinks="['website.home' => 'Home', 'website.about' => 'Our Clients']" />
<!-- End of Breadcrumb section -->

<!-- Start of clients section -->
<section id="arck-service" class="arck-service-section">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($clients as $key => $client)
                <div class="col-lg-2 col-6 col-sm-4 mb-2">
                    <img src="{{ asset($client['image']) }}" class="p-2" title="{{ $client['altText'] }}" alt="{{ $client['altText'] }}" loading="lazy">
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End of clients section -->
@endsection
