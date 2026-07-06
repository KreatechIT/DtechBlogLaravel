@extends('layouts.website')

@section('page-meta')
@php
    $pageTitle = 'Contact D-Tech Corporation || Explore Quality Products';
    $pageDescription = 'Contact DTech Corporation: reach out to us for inquiries, collaborations, and home facade design solutions. Get in touch today.';
@endphp
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">
<x-json-ld type="WebPage" :data="['name' => $pageTitle, 'description' => $pageDescription, 'url' => url()->current()]" />
@endsection

@section('page-content')
<!-- Start of Breadcrumb section -->
<x-breadcrumb image="assets/img/bg/ar-shape.png" activePage='Contact Us' :pageLinks="['website.home' => 'Home', 'website.contact' => 'Contact Us']" />
<!-- End of Breadcrumb section -->

<!-- Start of Contact page content section -->
<section id="arck-contact-page" class="arck-contact-page-section inner-page-padding">
    <div class="container">
        <div class="arck-contact-page-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="arck-contact-page-cta position-relative">
                        <div class="contact-cta-inner-img position-relative">
                            <img src="{{ asset('assets/img/about/Contact-Us-Page.webp') }}" alt="">
                        </div>
                        <div class="contact-cta-inner-text position-absolute headline pera-content" data-background="{{ asset('assets/img/about/cn-bg.webp') }}">
                            <h3>Contact Details</h3>
                            <div class="arck-video-cta-wrap">
                                <div class="video-cta-item d-flex">
                                    <div class="inner-icon">
                                        <img src="{{ asset('assets/img/icons/ic8.png') }}" alt="">
                                    </div>
                                    <div class="inner-text headline pera-content">
                                        <h3>Office Address:</h3>
                                        <p>Block J, House 46 road 18, Banani First floor,<br/> 1213 Dhaka, Bangladesh.</p>
                                    </div>
                                </div>
                                <div class="video-cta-item d-flex">
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
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="arck-contact-page-form">
                        <div class="arck-appointment-form-wrap">
                            <div class="arck-section-title headline pera-content">
                                <span class="sub-title text-uppercase">Get A Quote</span>
                                <h2>Keep Get in Touch</h2>
                                <p>Get in touch and let us know how can help you on your next facade project or come visit our office at Dhaka, Bangladesh.
                                </p>
                            </div>
                            <form action="{{ route('website.contact.submit') }}" method="post">
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
                                       Thanks for submitting the form. We have received your message. We will get back to you soon.
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="firstName" placeholder="First Name" required value="{{ old('firstName') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="lastName" placeholder="Last Name" required value="{{ old('lastName') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phoneNumber" placeholder="Phone Number" value="{{ old('phoneNumber') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Massaege" required>{{ old('messaage') }}</textarea>
                                    </div>
                                </div>
                                <button type="submit">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contact page content section -->

<div class="contact_map">
    <iframe class="arck_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456.4686565623861!2d90.36756341570243!3d23.756319509111652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf50d09acef5%3A0xaa4ddee2eeb066b7!2sHouse-77%2FB%2C%203%20Block%20%23%20F%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1676282028742!5m2!1sen!2sbd" width="100%"  height="475"></iframe>
</div>
@endsection
