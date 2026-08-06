@extends('layouts.website')

@section('page-meta')
@php
    $pageTitle = 'Dtech Corp Ltd Services at Premier Geodesic Domes & Canopies';
    $pageDescription = 'Dtech Corp Ltd: Leading provider of geodesic domes, glass doors, canopy systems, glass floors, glass bridges, Madina umbrellas & glass building interiors.';
@endphp
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">
<x-json-ld type="Service" :data="[
    'name' => $pageTitle,
    'description' => $pageDescription,
    'url' => url()->current(),
    'provider' => ['@type' => 'Organization', 'name' => config('organization.name')],
    'areaServed' => 'BD',
]" />
@endsection

@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Services'
    :pageLinks="['website.home' => 'Home', 'website.about' => 'Services']" />
<!-- End of Breadcrumb section -->

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
                        <h3><a href="{{ route('website.blog') }}">Geodesic-Dome</a></h3>

                        
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
                                                <h3><a href="{{ route('website.blog') }}">Glass-Dome</a></h3>

                        
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
<h3><a href="{{ route('website.blog') }}">Sky Lights</a></h3>
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
                                                                        <h3><a href="{{ route('website.blog') }}">Structural Glazing</a></h3>

                   
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
               <h3><a href="{{ route('website.blog') }}">Windows & Doors System</a></h3>

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
                        <h3><a href="{{ route('website.blog') }}">Aluminum Composite Panel</a></h3>
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
                                                <h3><a href="{{ route('website.blog') }}">Canopy System</a></h3>

                        
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
                    <h3><a href="{{ route('website.blog') }}">Madina Umbrella</a></h3>

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
                     <h3><a href="{{ route('website.blog') }}">Cladding ACP</a></h3>

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
                <h3><a href="{{ route('website.blog') }}">Spider Fixing Glazing</a></h3>

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
<h3><a href="{{ route('website.blog') }}">Glass Floor</a></h3>

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
<h3><a href="{{ route('website.blog') }}">Glass Bridge</a></h3>

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
<h3><a href="{{ route('website.blog') }}">Glass Stair Handrail</a></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="arck-service-item-2 position-relative text-center">vi
                    <span class="service-shape position-absolute"><img
                            src="{{ asset('assets/img/icons/ser-icon1.png') }}" alt=""></span>
                    <div class="inner-icon d-flex justify-content-center align-items-center position-relative">
                        <img src="assets/img/icons/Revolving-Door.svg" alt="Automatic Revolving Door">
                    </div>
                    <div class="inner-text headline pera-content ">
 <h3><a href="{{ route('website.blog') }}">Automatic Door</a></h3>

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
 <h3><a href="{{ route('website.blog') }}">Photo Voltic Glazing System</a></h3>
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
<h3><a href="{{ route('website.blog') }}">Steel Structure</a></h3>
                        
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
<h3><a href="{{ route('website.blog') }}">Construction(Rcc & Steel)</a></h3>
                        
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
<h3><a href="{{ route('website.blog') }}">Ceiling</a></h3>
                        
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
<h3><a href="{{ route('website.blog') }}">Stadium Roofing</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Cable System</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Metal Cladding</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Stone Cladding</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Drone</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Petrochemical Solutions</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Balustrades & Ralings</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Pergolas</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Store Fronts & Interiors</a></h3>
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
                        <h3><a href="{{ route('website.blog') }}">Cooling Tower</a></h3>
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
            <p>@lang('Through exceptional design, engineering and by applying improved practices Dtech Corp Ltd strives to achieve excellence in all our facade projects.')</p>
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
                            <p>@lang("Our highly specialised knowledge of materials, manufacturing technology, methods of assembly, application and commercial issues combined with our extensive experience of developing bespoke and cost effective product solutions mean we are able to produce market-driven facade system designs.")</p>
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
                            <p>@lang("We produce comprehensive shop drawings including plans, elevations, schedules, sections and enlarged details to obtain the architects approval. Reflecting the structure and shape of the building’s façade at every location they provide a roadmap for project managers and installers that can greatly affect the profitability of any project.")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5em wow fadeInUp" data-wow-delay="1850ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/structural-analysis.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>Structural Analysis</h3>
                            <p>@lang("We conduct a full structural analysis for all the facade components including, but not limited to fixings, brackets, glass, cladding, supporting frames, silicone, stone, etc. in accordance with international standards and project specifications using the latest software to provide our client with an optimal solution.")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5em wow fadeInUp" data-wow-delay="1900ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/thermal-analysis.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>Thermal Analysis</h3>
                            <p>@lang("Thermal analysis calculates the temperature and heat transfer within and between the different components in the facade systems. At Dtech Corp Ltd we carry out thermal analyses using finite element software to calculate the system u-value, the facade overall u-value and condensation (dew point).")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5em wow fadeInUp" data-wow-delay="1950ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/fabrication-drawings.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>Fabrication Drawings</h3>
                            <p>@lang("Dtech Corp Ltd has created a unique system of fabrication drawing with release procedures for the factory. Our skilled draftsmen and fabrication industry experts create detailed drawings identifying the different materials, cutting lengths and orientation as first or third angle of projection for the factory. This results in hassle-free completion and reduces time and cost.")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2000ms" data-wow-duration="1500ms">
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
                <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2050ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/system-design.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>System Design</h3>
                            <p>@lang("We evaluate the concept designs in terms of performance, budget and construct ability, then develop the best building envelope system to proceed with, including drawings, preliminary calculations and in conjunction with the project team we outline facade performance criteria.")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2100ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/technical-review.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>Technical Review</h3>
                            <p>@lang("A full technical facade design audit of the subcontractor’s designs, calculations and thermal models. We will conduct drawing-specific reviews to check that the relative designs conform to the specification, the client’s requirements and meet all the technical, lifetime and performance requirements of the project.")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow mt-5em  fadeInUp" data-wow-delay="2150ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/value-engineering.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>Bidding & Value Engineering</h3>
                            <p>@lang("We evaluate the bidders qualifications, proposed drawings and project understanding to identify the one most qualified to correctly complete the facade construction. Compliance checking alternative value bids is vital for you to make an informed decision and avoid the danger of accepting the lowest bid with the biggest errors.")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow mt-5em fadeInUp" data-wow-delay="2200ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/inspection.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>Control & Inspections</h3>
                            <p>@lang("We assess the causes of facade failure, recommend the remedial measures to take and can give expert advice on any resulting legal issues. We advocate starting the complex evaluation and approval process pre-assembly.")</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow mt-5em  fadeInUp" data-wow-delay="2250ms" data-wow-duration="1500ms">
                    <div class="arck-work-process-item text-center position-relative">
                        <div class="inner-icon">
                            <img src="assets/img/icons/quality-assurance.png" alt="">
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3>Quality Assurance</h3>
                            <p>@lang("We have a highly trained team of professionals to ensure proper quality control and assurance at all stages of our work. We make sure all of our work are qualitative and precise.")</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Work Process section -->
@endsection
