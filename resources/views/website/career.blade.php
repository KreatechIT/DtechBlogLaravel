@extends('layouts.website')

@section('page-meta')
<title> Building Facade Design Expert Career || D-Tech Corporation
</title>
    <meta name="description"
        content="Building Facade Design Expert Career at D-Tech Corporation - Innovate with Us in Architectural Excellence and Engineering Solutions

">
@endsection

@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Career' :pageLinks="['website.home' => 'Home', 'website.career' => 'Career']" />
<!-- End of Breadcrumb section -->

<section id="arck-contact-page" class="arck-contact-page-section inner-page-padding">
    <div class="container">
        <div class="arck-contact-page-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="arck-contact-page-form">
                        <div class="arck-appointment-form-wrap">
                            <div class="arck-section-title headline pera-content">
                                <span class="sub-title text-uppercase">Send your resume</span>
                                <h2>FACADE EXPERT?</h2>
                                <p>Fill out the form submit your resume and one of our hiring managers will contact you if we have an available position that matches your resume.</p>
                            </div>
                            <form action="{{ route('website.career.submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                       Thanks for submitting the form. We have received your application. We will get back to you soon.
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="text" placeholder="Phone Number" name="phoneNumber" value="{{ old('phoneNumber') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="formFile" class="form-label">Upload Resume</label>
                                        <input class="form-control pt-3" type="file" id="formFile" name="resume" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Massaege" name="message">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <button type="submit">Check availability</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="arck-contact-page-cta position-relative">
                        <div class="contact-cta-inner-img position-relative">
                            <img src="{{ asset('assets/img/about/career-page.webp') }}" alt="Dtech Corp Ltd Career Page">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
