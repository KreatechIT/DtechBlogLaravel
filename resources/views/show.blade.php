@extends('layouts.website')

@section('page-meta')
    <title>{{ $service->title }} || DTech Corporation</title>
@endsection

@section('page-content')
    <!-- Start of Breadcrumb section -->
    <x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Services'
        :pageLinks="['website.home' => 'Home', 'website.about' => 'Services']" />
    <!-- End of Breadcrumb section -->

    <!-- Start of Service section -->
    <section id="service-page-service" class="service-page-service-section">
        <div class="container">
            <div class="service-page-service-content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="service-img-wrapper position-relative">
                            <div class="service-img-shape1 position-absolute"><i></i></div>
                            <div class="service-img-shape2 position-absolute"><i></i></div>
                            <span class="shape1 position-absolute"><img src="assets/img/bg/dot-shape.png" alt=""></span>
                            <div class="inner-img">
                                <img src="{{ $service->image }}" alt="{{ $service->title }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="service-text-wrap">
                            <div class="service-title headline pera-content">
                                <span class="sub-title text-uppercase">Service</span>
                                <h2>{{ $service->title }}</h2>
                            </div>
                            <div class="service-description pera-content">
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service section -->

    <!-- Start of Testimonial section -->
    <section id="service-testimonial" class="service-testimonial-section">
        <div class="container">
            <div class="service-testimonial-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-testimonial-img-wrap position-relative">
                            <div class="service-img-shape1 position-absolute"><i></i></div>
                            <div class="service-img-shape2 position-absolute"><i></i></div>
                            <div class="inner-img">
                                <img src="assets/img/service/Service_Testimonial_Image.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-testimonial-text-wrap">
                            <div class="service-section-title headline pera-content">
                                <span class="sub-title text-uppercase">Client Review</span>
                                <h2>What Our Clients Say</h2>
                            </div>
                            <div class="service-testimonial-slider-wrap">
                                <div class="service-testimonial-slider">
                                    <!-- Add your testimonial slides here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial section -->
@endsection
