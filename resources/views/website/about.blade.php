@extends('layouts.website')

@section('page-meta')
@php
    $pageTitle = 'D-Tech Corporation Provides Home Facade Design & Architecture Ideas';
    $pageDescription = 'D-Tech Corporation successfully worked with Military Engineers, Rang Properties, Concord Group, and Rupayan Group building facade design.';
@endphp
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">
<x-json-ld type="WebPage" :data="['name' => $pageTitle, 'description' => $pageDescription, 'url' => url()->current()]" />
@endsection


@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='About Us' :pageLinks="['website.home' => 'Home', 'website.about' => 'About Us']" />
<!-- End of Breadcrumb section -->

<!-- Start of about page about section -->
<section id="about-page-about" class="about-page-about-section">
    <div class="container">
        <div class="about-page-about-content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="arck-about-img-wrapper position-relative">
                        <div class="acrk-img-shape1 position-absolute"><i></i></div>
                        <div class="acrk-img-shape2 position-absolute"><i></i></div>
                        <span class="shape1 position-absolute"><img src="assets/img/bg/dot-shape.png" alt=""></span>
                        <div class="inner-img">
                            <img src="{{ asset('assets/img/about/Dtech_About_Us.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="arck-about-text-wrap-2">
                        <div class="arck-section-title headline pera-content">
                            <span class="sub-title text-uppercase">About DTech Corporation Limited</span>
                            <h2>We Provide Best <span>Facade</span> Experience.</h2>
                            <p>Facade Design, Engineering Solution & Sourcing Since 1995</h2>
                            <p>Dtech is widely known for its Facade Design and Engineering Solutions. We provide you with one stop building solution in our business. We are a Defense enlisted contracting company the pioneers in the commercial Exterior and Interior industry in Bangladesh. We specialize in Glass Dome and Sky lights and completed over 200+ commercial projects in Bangladesh in our last 20+ years in business. Our project includes some major landmarks of Dhaka city such as the state of the art Bangabandhu Military Museum and iconic Bashundhara City Maill. For all glazing, exterior, interior inquiries please reach out to us!</p>
                        </div>
                        <div class="about-signature-img d-flex wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            {{--  <div class="inner-img">
                                <img src="assets/img/about/Delraz.PNG" alt="ENGR. DELRAZ. H KHAN">
                            </div>
                            <div class="inner-text headline  position-relative">
                                <div class="about-author">
                                    <h4>ENGR. DELRAZ. H KHAN</h4>
                                    <span>Managing Director</span>
                                </div>
                            </div>  --}}
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="inner-author">
                                        <div class="author-img">
                                            <img src="assets/img/about/Delraz-Khan.jpg" class="img-fluid" alt="Engr. Delraz H Khan">
                                        </div>
                                        <div class="author-text headline about-text">
                                            <h4>Engr. Delraz H Khan</h4>
                                            <h6 class="mt-2">MSEE & MSEM</h6>
                                            <small>George Washington University (USA)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inner-author">
                                        <div class="author-img">
                                            <img src="assets/img/about/Jasraz-Khan.jpg" alt="Jasraz-Khan">
                                        </div>
                                        <div class="author-text headline about-text">
                                            <h4>Jasraz Khan</h4>
                                            <h6 class="mt-2">B.M.S, A.B.A, A.G</h6>
                                            <small>Robert H Smith, School of Business University of Maryland (USA)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of about page about section -->

<!-- Start of CTA section -->
<section id="arck-cta" class="arck-cta-section position-relative" data-background="{{ asset('assets/img/bg/About_Us_Page_Background_Image.webp') }}">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="arck-cta-content text-center headline position-relative">
            <h2>Quality . Commitment . Craftsmanship</h2>
            <div class="arck-cta-button-group d-flex justify-content-center">
                <div class="arck-btn">
                    <a class="d-flex justify-content-center align-items-center text-uppercase" href="{{ route('website.contact') }}">Contact Us</a>
                </div>
                <div class="arck-cta-number d-flex align-items-center ">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:01988818050">01988818050</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of CTA section -->

<!-- Start of Counter section -->
<section id="arck-counter" class="arck-counter-section">
    <div class="container">
        <div class="arck-counter-content">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="arck-counter-inner-item headline pera-content text-center position-relative">
                        <h3><span class="counter">250</span>+</h3>
                        <p>Workforce</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="arck-counter-inner-item headline pera-content text-center position-relative">
                        <h3><span class="counter">212</span>+</h3>
                        <p>Completed Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="arck-counter-inner-item headline pera-content text-center position-relative">
                        <h3><span class="counter">50</span>+</h3>
                        <p>Expert Engineers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="arck-counter-inner-item headline pera-content text-center position-relative">
                        <h3><span class="counter">25</span>+</h3>
                        <p>Years of Experience </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Counter section -->

<!-- Start of Testimonial section -->
<section id="arck-testimonial" class="arck-testimonial-section">
    <div class="container">
        <div class="arck-testimonial-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="arck-testimonial-img-wrap position-relative">
                        <div class="acrk-img-shape1 position-absolute"><i></i></div>
                        <div class="acrk-img-shape2 position-absolute"><i></i></div>
                        <div class="inner-img">
                            <img src="assets/img/about/About_Us_Page_Clients_Review.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="arck-testimonial-text-wrap">
                        <div class="arck-section-title headline pera-content">
                            <span class="sub-title text-uppercase">Client Review</span>
                            <h2>What Our Client Say</h2>
                        </div>
                        <div class="arck-testimonial-slider-wrap">
                            <div class="arck-testimonial-slider">
                                @foreach ($testimonials as $key => $testimonial)
                                    <x-testimonial-card authorImage="{{ $testimonial['authorImage'] }}"  authorName="{{ $testimonial['authorName'] }}" authorDesignation="{{ $testimonial['authorDesignation'] }}" authorReview="{{ $testimonial['authorReview'] }}" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial section -->

<!-- Start of Sponsor section -->
<section id="arck-sponsor" class="arck-sponsor-section">
    <div class="container">
        <div class="arck-sponsor-slider">
            @foreach ($clients as $key => $client)
                <x-client-logo image="{{ $client['image'] }}"  altText="{{ $client['altText'] }}" />
            @endforeach
        </div>
    </div>
</section>
<!-- End of Sponsor section -->
@endsection
