@extends('layouts.website')

@section('page-meta')
<title>404 Page Not Found || DTech Corporation</title>
@endsection


@section('page-content')


<section id="about-page-about" class="about-page-about-section mt-5">
    <div class="container">
        <div class="about-page-about-content">
            <div class="row mt-5">
                <div class="col-lg-6 m-auto ">
                    <div class="arck-section-title headline pera-content mt-5">
                        <span class="sub-title text-uppercase">404</span>
                        <h2>Oops! The page you requested could not be found.</h2>
                    </div>
                    <div class="arck-btn">
                        <a class="d-flex justify-content-center align-items-center text-uppercase" href="{{ route('website.home') }}">Go to homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
