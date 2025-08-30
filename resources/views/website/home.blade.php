@extends('layouts.website')

@section('page-meta')
    <title>D-Tech Corporation Ltd is the Best for facade design in Bangladesh
</title>

    <meta name="description"
        content="Dtech corp ltd is responsible for leading the design, procurement, programming, testing, installation, repair and refurbishment process of facade systems in Bangladesh.

">
@endsection


@section('page-content')
    <!-- Start of Slider section  -->
    <section id="arck-slider-1" class="arck-slider-section-1 position-relative">
        <div id="arck-slider-main_1" class="arck-slider-area">
            <div class="arck-main-slider-item position-relative" >
                <div class="arck-main-slider-img position-absolute img-zooming"
                    data-background="assets/img/sliders/1.jpg" style="filter: brightness(0.5);"></div>
                <div class="container">
                    <div class="arck-slider-main-text headline position-relative">
                        <span class="line-shape position-absolute"></span>
                        <div class="slider-sub-text text-uppercase" style="color: #fff; font-weight: 700; font-size: 26px;">
                            Bangladesh Military Museum
                        </div>
                        <h2 style="color: #fff; font-weight: 500; font-size: 40px;">
                            Facade Design & Engineering Solution
                        </h2>
                        <div class="arck-btn" style="margin-top: 20px;">
                            <a class="d-flex justify-content-center align-items-center text-uppercase"
                                href="{{ route('website.projects') }}">View Works</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arck-main-slider-item position-relative">
                <div class="arck-main-slider-img position-absolute img-zooming"
                    data-background="assets/img/sliders/2.jpg" style="filter: brightness(0.5);"></div>
                <div class="container">
                    <div class="arck-slider-main-text headline position-relative">
                        <span class="line-shape position-absolute"></span>
                        <div class="slider-sub-text text-uppercase" style="color: #fff; font-weight: 700; font-size: 26px;">
                            Dhaka Metro
                        </div>
                        <h2 style="color: #fff; font-weight: 500; font-size: 40px;">
                            One Stop Architectural Solution
                        </h2>
                        <div class="arck-btn" style="margin-top: 20px;">
                            <a class="d-flex justify-content-center align-items-center text-uppercase"
                                href="{{ route('website.products') }}">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arck-main-slider-item position-relative">
                <div class="arck-main-slider-img position-absolute img-zooming"
                    data-background="assets/img/sliders/3.jpg" style="filter: brightness(0.5);"></div>
                <div class="container">
                    <div class="arck-slider-main-text headline position-relative">
                        <span class="line-shape position-absolute"></span>
                        <div class="slider-sub-text text-uppercase" style="color: #fff; font-weight: 700; font-size: 26px;">
                            Commercial Building
                        </div>
                        <h2 style="color: #fff; font-weight: 500; font-size: 40px;">
                            Experience over 25 years
                        </h2>
                        <div class="arck-btn" style="margin-top: 20px;">
                            <a class="d-flex justify-content-center align-items-center text-uppercase"
                                href="{{ route('website.contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arck-main-slider-item position-relative">
                <div class="arck-main-slider-img position-absolute img-zooming"
                    data-background="assets/img/sliders/cb-2.webp" style="filter: brightness(0.5);"></div>
                <div class="container">
                    <div class="arck-slider-main-text headline position-relative">
                        <span class="line-shape position-absolute"></span>
                        <div class="slider-sub-text text-uppercase" style="color: #fff; font-weight: 700; font-size: 26px;">
                            Commercial Building
                        </div>
                        <h2 style="color: #fff; font-weight: 500; font-size: 40px;">
                            Technical Inputs From Experts
                        </h2>
                        <div class="arck-btn" style="margin-top: 20px;">
                            <a class="d-flex justify-content-center align-items-center text-uppercase"
                                href="{{ route('website.projects') }}">View Works</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arck-main-slider-item position-relative">
                <div class="arck-main-slider-img position-absolute img-zooming"
                    data-background="assets/img/sliders/ds.webp" style="filter: brightness(0.5);"></div>
                <div class="container">
                    <div class="arck-slider-main-text headline position-relative">
                        <span class="line-shape position-absolute"></span>
                        <div class="slider-sub-text text-uppercase" style="color: #fff; font-weight: 700; font-size: 26px;">
                            Domes & Skylights
                        </div>
                        <h2 style="color: #fff; font-weight: 500; font-size: 40px;">
                            Implementing Your Vision Into Reality
                        </h2>
                        <div class="arck-btn" style="margin-top: 20px;">
                            <a class="d-flex justify-content-center align-items-center text-uppercase"
                                href="{{ route('website.products') }}">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arck-main-slider-item position-relative">
                <div class="arck-main-slider-img position-absolute img-zooming"
                    data-background="assets/img/sliders/rnt.webp" style="filter: brightness(0.5);"></div>
                <div class="container">
                    <div class="arck-slider-main-text headline position-relative">
                        <span class="line-shape position-absolute"></span>
                        <div class="slider-sub-text text-uppercase" style="color: #fff; font-weight: 700; font-size: 26px;">
                            Rajshahi Novo Theater
                        </div>
                        <h2 style="color: #fff; font-weight: 500; font-size: 40px;">
                            Quality . Commitment . Craftsmanship
                        </h2>
                        <div class="arck-btn" style="margin-top: 20px;">
                            <a class="d-flex justify-content-center align-items-center text-uppercase"
                                href="{{ route('website.contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Slider section -->

    <!-- Start of Service section -->
    <section id="arck-service" class="arck-service-section">
        <div class="container">
            <div class="arck-section-title headline text-center pera-content mb-5 wow fadeInUp" data-wow-delay="100ms"
                data-wow-duration="1500ms">
                <span class="sub-title text-uppercase">What We Do?</span>
                <h2>Scope of work</h2>
                <p>@lang("Dtech Corp Ltd brings an architect's vision to life through innovative facade consulting, design and engineering services.")</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">

                            <img src="assets/img/icons/Geodesic-Dome.svg" alt="Glass Dome">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Geodesic Dome</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Glass-Dome.svg" alt="Glass Dome">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Glass Dome</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Skylight.svg" alt="Sky Lights">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Sky Lights</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center"
                        title="Four Side Strutural Glazing | Semi Unitized | Unitized">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Stuctural-Glazing.svg" alt="Structural Glazing">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html"
                                    title="Four Side Strutural Glazing | Semi Unitized | Unitized">Structural Glazing</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Window-Door-System.svg" alt="Windows & Doors System">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Windows & Doors System</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Aluminum-Composite-Panel.svg" alt="Aluminum Composite Panel">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Aluminum Composite Panel</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Canopy-System.svg" alt="Canopy System">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Canopy System</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Madina-Umbrella.svg" alt="Madina Umbrella">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Madina Umbrella</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Cladding-ACP.svg" alt="Cladding ACP">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Cladding ACP</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Point-Fixing-Glazing.svg" alt="Spider Fixing Glazing">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Spider Fixing Glazing</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Glass-Floor.svg" alt="Glass Floor">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Glass Floor</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Glass-Bridge.svg" alt="Glass Bridge">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Glass Bridge</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Glass-Stair-Handrail.svg" alt="Glass Stair Handrail">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Glass Stair Handrail</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Revolving-Door.svg" alt="Automatic Revolving Door">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Automatic Door</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Photo-Voltic-Glazing-System.svg" alt="Photo Voltic Glazing System">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Photo Voltic Glazing System</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Stell-Structure.svg" alt="Steel Structure">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Steel Structure</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Construction.svg" alt="Construction(Rcc & Steel)">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Construction(Rcc & Steel)</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Ceiling.svg" alt="Ceiling">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Ceiling</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Stadium-Roofing.svg" alt="Stadium Roofing">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Stadium Roofing</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Cable-System.svg" alt="Cable System">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Cable System</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Metal-Cladding.svg" alt="Metal Cladding">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Metal Cladding</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Stone-Cladding.svg" alt="Stone Cladding">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Stone Cladding</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Drone.svg" alt="Drone">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Drone</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Petrochemical-Cover-Solution.svg" alt="Petrochemical Solutions">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Petrochemical Solutions</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Balustrades-Raling.svg" alt="Balustrades & Ralings">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Balustrades & Ralings</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Pergoals.svg" alt="Pergolas">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Pergolas</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Store-Fronts-Interiors.svg" alt="Store Fronts && Interiors">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Store Fronts & Interiors</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="arck-service-item-2 position-relative text-center">
                        <span class="service-shape position-absolute"><img
                                src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                        <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                            <img src="assets/img/icons/Cooling-Tower.svg" alt="Cooling Tower">
                        </div>
                        <div class="inner-text headline pera-content ">
                            <h3><a href="service-single.html">Cooling Tower</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service section -->

    <!-- Start of Work Process section -->
    <section id="arck-work-process" class="arck-work-process-section mt-5">
        <div class="container">
            <div class="arck-section-title headline text-center pera-content wow fadeInUp" data-wow-delay="200ms"
                data-wow-duration="1500ms">
                <span class="sub-title text-uppercase">How We Complete Works</span>
                <h2>Design + Engineering</h2>
                <p>Through exceptional design, engineering and by applying improved practices Dtech Corp Ltd strives to achieve excellence in all our facade projects.</p>
            </div>
            <div class="arck-work-process-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1700ms" data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/concept-design.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Concept Design</h3>
                                <p>@lang("Our expert facade engineers will provide facade concept development and design assistance to select the right system to meet the architect's vision and the required performance for your facade project.")</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1750ms" data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/system-design.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>System Design</h3>
                                <p>@lang('Our highly specialised knowledge of materials, manufacturing technology, methods of assembly, application and commercial issues combined with our extensive experience of developing bespoke and cost effective product solutions mean we are able to produce market-driven facade system designs.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1800ms" data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/shop-drawings.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Shop Drawings</h3>
                                <p>@lang('We produce comprehensive shop drawings including plans, elevations, schedules, sections and enlarged details to obtain the architects approval. Reflecting the structure and shape of the building’s façade at every location they provide a roadmap for project managers and installers that can greatly affect the profitability of any project.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5em wow fadeInUp" data-wow-delay="1850ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/structural-analysis.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Structural Analysis</h3>
                                <p>@lang('We conduct a full structural analysis for all the facade components including, but not limited to fixings, brackets, glass, cladding, supporting frames, silicone, stone, etc. in accordance with international standards and project specifications using the latest software to provide our client with an optimal solution.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5em wow fadeInUp" data-wow-delay="1900ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/thermal-analysis.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Thermal Analysis</h3>
                                <p>@lang('Thermal analysis calculates the temperature and heat transfer within and between the different components in the facade systems. At Dtech Corp Ltd we carry out thermal analyses using finite element software to calculate the system u-value, the facade overall u-value and condensation (dew point).')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5em wow fadeInUp" data-wow-delay="1950ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/fabrication-drawings.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Fabrication Drawings</h3>
                                <p>@lang('Dtech Corp Ltd has created a unique system of fabrication drawing with release procedures for the factory. Our skilled draftsmen and fabrication industry experts create detailed drawings identifying the different materials, cutting lengths and orientation as first or third angle of projection for the factory. This results in hassle-free completion and reduces time and cost.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2000ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/schematic-design.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Schematic & Concept Design</h3>
                                <p>@lang("After we review and assess the proposed facade design with the developer and the architect we select the correct materials and systems for the project. We'll address any special design requirements and critique the schematic drawings and specs.")</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2050ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/system-design.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>System Design</h3>
                                <p>@lang('We evaluate the concept designs in terms of performance, budget and construct ability, then develop the best building envelope system to proceed with, including drawings, preliminary calculations and in conjunction with the project team we outline facade performance criteria.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2100ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/technical-review.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Technical Review</h3>
                                <p>@lang('A full technical facade design audit of the subcontractor’s designs, calculations and thermal models. We will conduct drawing-specific reviews to check that the relative designs conform to the specification, the client’s requirements and meet all the technical, lifetime and performance requirements of the project.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow mt-5em  fadeInUp" data-wow-delay="2150ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/value-engineering.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Bidding & Value Engineering</h3>
                                <p>@lang('We evaluate the bidders qualifications, proposed drawings and project understanding to identify the one most qualified to correctly complete the facade construction. Compliance checking alternative value bids is vital for you to make an informed decision and avoid the danger of accepting the lowest bid with the biggest errors.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2200ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/inspection.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Control & Inspections</h3>
                                <p>@lang('We assess the causes of facade failure, recommend the remedial measures to take and can give expert advice on any resulting legal issues. We advocate starting the complex evaluation and approval process pre-assembly.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow mt-5em  fadeInUp" data-wow-delay="2250ms"
                        data-wow-duration="1500ms">
                        <div class="arck-work-process-item text-center position-relative">
                            <div class="inner-icon">
                                <img src="assets/img/icons/quality-assurance.png" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>Quality Assurance</h3>
                                <p>@lang('We have a highly trained team of professionals to ensure proper quality control and assurance at all stages of our work. We make sure all of our work are qualitative and precise.')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Work Process section -->

    <!-- Start of About section -->
    <section id="arck-about" class="arck-about-section">
        <div class="container">
            <div class="arck-about-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="arck-about-text-wrapper position-relative">
                            <span class="about-bg position-absolute"><img src="assets/img/bg/ab-bg.png" alt=""
                                    loading="lazy"></span>
                            <div class="arck-section-title headline pera-content wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <span class="sub-title text-uppercase">About DTech Corporation Limited</span>
                                <h1>Facade Design & Engineering Solution Since 1998</h1>
                                <p>Dtech is widely known for its Facade Design and Engineering Solutions. We provide you
                                    with one stop building solution
                                    in our business. We are a Defense enlisted contracting company and the pioneers
                                    in the commercial Exterior and Interior industry in Bangladesh. We specialize in Glass
                                    Dome and Sky lights and completed over 200+ commercial projects in Bangladesh in
                                    our last 20+ years in business. Our project includes some major landmarks of Dhaka city such as the state of the art Bangabandhu Military Museum and iconic Bashundhara City Maill. For all glazing, exterior, interior inquiries
                                    please reach out to us!</p>
                            </div>
                            <div class="arck-year-experience headline pera-content d-flex align-items-center wow fadeInUp"
                                data-wow-delay="400ms" data-wow-duration="1500ms">
                                <h3><span class="counter">{{ date('Y') - 1998 }}</span>+</h3>
                                <p>Years of Experience</p>
                            </div>
                            <div class="arck-btn wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <a class="d-flex justify-content-center align-items-center text-uppercase"
                                    href="{{ route('website.about') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="arck-about-img-wrapper position-relative wow fadeInRight" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="acrk-img-shape1 position-absolute"><i></i></div>
                            <div class="acrk-img-shape2 position-absolute"><i></i></div>
                            <span class="shape1 position-absolute"><img src="{{ asset('assets/img/bg/dot-shape.png') }}"
                                    alt=""></span>
                            <div class="inner-img">
                                <img src="{{ asset('assets/img/about/about_bg.jpg') }}" alt=""
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About section -->

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

    <!-- Start of Project section -->
    <section id="arck-project" class="arck-project-section">
        <div class="container">
            <div class="arck-project-top-content d-flex justify-content-between align-items-center">
                <div class="arck-section-title headline pera-content">
                    <h2 class="latest-projects">Latest Projects</h2>
                </div>
                <div class="arck-project-filter-btn ul-li text-center">
                    <ul class="filter clearfix">
                        <li data-filter="all" class="all active">All</li>
                        <li data-filter="two" class="two">Landmark</li>
                        <li data-filter="three" class="three">Residential</li>
                        <li data-filter="four" class="four">Commercial</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="arck-project-slider-wrapper">
            <div class="arck-project-slider">
                @foreach ($projects as $key => $project)
                    <x-project-card image="{{ $project['image'] }}" category="{{ $project['category'] }}"
                        title="{{ $project['title'] }}" shortDes="{{ $project['shortDes'] }}"
                        pageLink="{{ $project['pageLink'] }}" cardClass="{{ $project['cardClass'] }}" />
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Project section -->

    <!-- Start of Testimonial section -->
    <section id="arck-testimonial" class="arck-testimonial-section">
        <div class="container">
            <div class="arck-testimonial-content">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="arck-testimonial-img-wrap position-relative">
                            <div class="acrk-img-shape1 position-absolute"><i></i></div>
                            <div class="acrk-img-shape2 position-absolute"><i></i></div>
                            <div class="inner-img">
                                <img src="{{ asset('assets/img/about/Landing_Page_Clients_Review.webp') }}"
                                    alt="" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="arck-testimonial-text-wrap">
                            <div class="arck-section-title headline pera-content wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <span class="sub-title text-uppercase">Client Testimonials</span>
                                <h2>What Our Client Say</h2>
                            </div>
                            <div class="arck-testimonial-slider-wrap wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="arck-testimonial-slider">
                                    @foreach ($testimonials as $key => $testimonial)
                                        <x-testimonial-card authorImage="{{ $testimonial['authorImage'] }}"
                                            authorName="{{ $testimonial['authorName'] }}"
                                            authorDesignation="{{ $testimonial['authorDesignation'] }}"
                                            authorReview="{{ $testimonial['authorReview'] }}" />
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

    <!-- Start of Appointment video section -->
    <section id="arck-appointment-video" class="arck-appointment-video-section position-relative">
        <span class="side-icon position-absolute"><img src="{{ asset('assets/img/icons/ic7.png') }}"
                alt=""></span>
        <div class="container">
            <div class="arck-appointment-form-wrap">
                <div class="arck-section-title headline pera-content wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <span class="sub-title text-uppercase">Get A Quote</span>
                    <h2>Book An Appointment</h2>
                </div>
                <form action="#" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="phone" placeholder="E-mail">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" placeholder="Massaege"></textarea>
                        </div>
                    </div>
                    <button type="submit">submit now</button>
                </form>
            </div>
        </div>
        <div class="arck-video-play-wrap position-absolute"
            data-background="{{ asset('assets/img/bg/Landing_Page_Book-An-Appointment.webp') }}">
            <div class="arck-video-cta-wrap position-absolute d-flex">
                <div class="video-cta-item d-flex">
                    <div class="inner-icon">
                        <img src="{{ asset('assets/img/icons/ic8.png') }}" alt="">
                    </div>
                    <div class="inner-text headline pera-content">
                        <h3>Office Address:</h3>
                        <p>House-77/B , Block- F, Road-3, Banani, 1213 Dhaka, Bangladesh.</p>
                    </div>
                </div>
                <div class="video-cta-item d-flex active">
                    <div class="inner-icon">
                        <img src="{{ asset('assets/img/icons/ic9.png') }}" alt="">
                    </div>
                    <div class="inner-text headline pera-content">
                        <h3>Mail Us:</h3>
                        <p>dtechbd@yahoo.com.sg</p>
                        <p>dtechcorp.ltd@gmail.com</p>
                    </div>
                </div>
                <div class="video-cta-item d-flex">
                    <div class="inner-icon">
                        <img src="{{ asset('assets/img/icons/ic10.png') }}" alt="">
                    </div>
                    <div class="inner-text headline pera-content">
                        <h3>Telephone:</h3>
                        <p>+88 01988818050</p>
                        <p>+88 01859666594</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Appointment Video section -->

    <!-- Start of Sponsor section -->
    <section id="arck-sponsor" class="arck-sponsor-section">
        <div class="container">
            <div class="arck-sponsor-slider">
                @foreach ($clients as $key => $client)
                    <x-client-logo image="{{ $client['image'] }}" altText="{{ $client['altText'] }}" />
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Sponsor section -->
@endsection