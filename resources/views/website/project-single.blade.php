@extends('layouts.website')

@section('page-meta')
<title>{{ $project['title'] }} Project || DTech Corporation</title>
@endsection


@section('page-content')
<!-- Start of Breadcrumb section -->

<x-breadcrumb image="assets/img/bg/ar-shape.png"
activePage="{{ $project['title'] }}"
:pageLinks="[
    'website.home' => 'Home',
    'website.projects' => 'Projects',
    '#' => 'Project Details'
]" />
<!-- End of Breadcrumb section -->

<!-- Start of project details section -->
<section id="arck-project-details" class="arck-project-details-section inner-page-padding">
    <div class="container">

        <div class="arck-project-details-text-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <div class="arck-project-details-img-slider">
                        <div class="arck-project-details-slider">
                            @foreach ($project['sliderImages'] as $sliderImage)
                                <div class="arck-project-slide-item">
                                    <img src="{{ asset($sliderImage) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="arck-project-details-text headline pera-content ul-li-block">
                        <h3>Project Details</h3>
                        <p>{{ $project['des'] }}</p>
                        <hr/>
                        <h4>Scope of Works</h4>
                        <ul>
                            @foreach ($project['scopes'] as $scope)
                                <li class="mb-0">{{ $scope }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="arck-project-details-feature headline">
                        <h3>Project Info</h3>
                        <div class="feature-list ul-li-block">
                            <ul>
                                <li>Project Type:  <span>{{ $project['projectType'] }}</span></li>
                                <li>Project By: <span>{{ $project['projectBy'] }}</span></li>
                                <li>Consultant: <span>{{ $project['consultant'] }}</span></li>
                                <li>Architect: <span>{{ $project['architects'] }}</span></li>
                                <li>Main Contractor: <span>{{ $project['mainContractors'] }}</span></li>
                                <li>Facade Contractors: <span>{{ $project['facadeContractors'] }}</span></li>
                                <li>Location: <span>{{ $project['location'] }}</span></li>
                                @if($project['completion'])
                                    <li>Completion: <span>{{ $project['completion'] }}</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of project details section -->
@endsection
