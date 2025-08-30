@extends('layouts.website')

@section('page-meta')
<title> Dtech Corp Ltd: Landmark Commercial, Residential Projects.
</title>
   <meta name="description"
        content="D-tech corp ltd best facade design landmark projects - bangabandhu military museum & bashundhara city shopping mall Dhaka,Bangladesh">
@endsection

@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Projects' :pageLinks="['website.home' => 'Home', 'website.projects' => 'Projects']" />
<!-- End of Breadcrumb section -->

<!-- Start of Project Page content section -->
<section id="arck-project-feed" class="arck-project-feed-section inner-page-padding">
    <div class="container">
        <div class="arck-project-filter-btn ul-li">
            <div class="button-group  clearfix">
                <button class="filter-button is-checked" data-filter="*">All</button>
                <button class="filter-button" data-filter=".landmark">Landmark</button>
                <button class="filter-button" data-filter=".residential">Residential</button>
                <button class="filter-button" data-filter=".commercial">Commercial</button>
            </div>
        </div>
    </div>
    <div class="arck-project-filter-content">
        <div class="filtr-container-area grid clearfix" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
            <div class="grid-sizer"></div>
            @foreach ($projects as $key => $project)
                <x-project-card image="{{ $project['image'] }}" category="{{ $project['category'] }}" title="{{ $project['title'] }}" shortDes="{{ $project['shortDes'] }}" pageLink="{{ $project['pageLink'] }}" cardClass="{{ $project['cardClass'] }}" />
            @endforeach
        </div>
    </div>
</section>
<!-- End of Project Page content section -->

@endsection

