@extends('layouts.website')

@section('page-meta')
<title>Residential Projects || DTech Corporation</title>
@endsection

@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Residential Projects' :pageLinks="['website.home' => 'Home', 'website.projects' => 'Projects', '#' => 'Residential Projects']" />
<!-- End of Breadcrumb section -->

<!-- Start of Project Page content section -->
<section id="arck-project-feed" class="arck-project-feed-section inner-page-padding">
    <div class="arck-project-filter-content">
        <div class="filtr-container-area grid clearfix">
            <div class="grid-sizer"></div>
            @foreach ($projects as $key => $project)
                <x-project-card image="{{ $project['image'] }}" category="{{ $project['category'] }}" title="{{ $project['title'] }}" shortDes="{{ $project['shortDes'] }}" pageLink="{{ $project['pageLink'] }}" cardClass="{{ $project['cardClass'] }}" />
            @endforeach
        </div>
    </div>
</section>
<!-- End of Project Page content section -->

@endsection
