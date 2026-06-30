<header id="arck-header" class="arck-header-section header-style-one">
    <div class="arck-header-main-content d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{ route('website.home') }}"><img src="{{ asset('assets/img/logo/dtech_logo_new.png') }}" alt="DTech Corporation"></a>
        </div>
        <div class="arck-main-navigation-wrap">
            <nav class="main-navigation clearfix ul-li">
                <ul id="main-nav" class="nav navbar-nav clearfix">
                    <li><a href="{{ route('website.home') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="{{ route('website.about') }}">About US</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a href="{{ route('website.clients') }}">Our Clients</a></li>
                            <li><a href="{{ route('website.suppliers') }}">Our Suppliers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('website.services') }}">Services</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a href="{{ route('website.services') }}#arck-service">Scope of work</a></li>
                            <li><a href="{{ route('website.services') }}#arck-work-process">Design + Engineering</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('website.projects') }}">Projects</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a href="{{ route('website.landmarkProjects') }}">Landmark</a></li>
                            <li><a href="{{ route('website.commercialProjects') }}">Commercial</a></li>
                            <li><a href="{{ route('website.residentialProjects') }}">Residential</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('website.products') }}">Products</a></li>
                    <li><a href="{{ route('website.career') }}">Career</a></li>
                    <li><a href="{{ route('website.blog') }}">Blog</a></li>
                    <li><a href="{{ route('website.contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-cta-social d-flex align-items-center">
            <div class="header-social ul-li">
                <ul>
                    <li><a href="https://www.linkedin.com/company/dtechcorporationlimited/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.facebook.com/dtechcorporationlimited" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/dtechcorpo/" target="_blank"><i class="fab fa-twitter"></i></a></li>

                    <li><a href="https://www.instagram.com/dtechcorporationlimited/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="mobile_menu">
            <div class="mobile_menu_button open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="mobile_menu_wrap">
                <div class="mobile_menu_overlay open_mobile_menu"></div>
                <div class="mobile_menu_content">
                    <div class="mobile_menu_close open_mobile_menu">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="m-brand-logo">
                        <a  href="{{ route('website.home') }}"><img src="{{ asset('assets/img/logo/dtech_logo_new.png') }}" alt="DTech Corporation"></a>
                    </div>
                    <nav class="mobile-main-navigation  clearfix ul-li">
                        <ul id="m-main-nav" class="nav navbar-nav clearfix">
                            <li><a href="{{ route('website.home') }}">Home</a></li>
                            <li class="dropdown">
                                <a href="{{ route('website.about') }}">About US</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{ route('website.clients') }}">Our Clients</a></li>
                                    <li><a href="{{ route('website.suppliers') }}">Our Suppliers</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="{{ route('website.services') }}">Services</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{ route('website.services') }}#arck-service">Scope of work</a></li>
                                    <li><a href="{{ route('website.services') }}#arck-work-process">Design + Engineering</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('website.projects') }}">Projects</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{ route('website.landmarkProjects') }}">Landmark</a></li>
                                    <li><a href="{{ route('website.commercialProjects') }}">Commercial</a></li>
                                    <li><a href="{{ route('website.residentialProjects') }}">Residential</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('website.products') }}">Products</a></li>
                            <li><a href="{{ route('website.career') }}">Career</a></li>
                            <li><a href="{{ route('website.blog') }}">Blog</a></li>
                            <li><a href="{{ route('website.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Mobile Menu -->
        </div>
    </div>
</header>
