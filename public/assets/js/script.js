/* -----------------------------------------------------------------------------
File:           JS Core
Version:        1.0
Last change:    00/00/00
-------------------------------------------------------------------------------- */
(function () {
    "use strict";

    var Dtech = {
        init: function () {
            this.Basic.init();
        },

        Basic: {
            init: function () {
                this.preloader();
                this.BackgroundImage();
                this.Animation();
                this.StickyHeader();
                this.MobileMenu();
                this.scrollTop();
                this.ProjectFilterSlider();
                this.CounterUp();
                this.CarouselSliderJS();
                this.ProjectGridFilter();

            },
            preloader: function () {
                jQuery(window).on("load", function () {
                    jQuery("#preloader").fadeOut("slow", function () {
                        jQuery(this).remove();
                    });
                });
            },
            BackgroundImage: function () {
                $("[data-background]").each(function () {
                    $(this).css(
                        "background-image",
                        "url(" + $(this).attr("data-background") + ")"
                    );
                });
            },
            Animation: function () {
                if ($(".wow").length) {
                    var wow = new WOW({
                        boxClass: "wow",
                        animateClass: "animated",
                        offset: 0,
                        mobile: true,
                        live: true,
                    });
                    wow.init();
                }
            },
            StickyHeader: function () {
                jQuery(window).on("scroll", function () {
                    if (jQuery(window).scrollTop() > 250) {
                        jQuery(".archx-header-section").addClass("sticky_on");
                    } else {
                        jQuery(".archx-header-section").removeClass(
                            "sticky_on"
                        );
                    }
                });
                jQuery(window).on("scroll", function () {
                    if (jQuery(window).scrollTop() > 250) {
                        jQuery(".arck-header-section").addClass("sticky-on");
                    } else {
                        jQuery(".arck-header-section").removeClass("sticky-on");
                    }
                });
                jQuery(document).ready(function (o) {
                    0 < o(".navSidebar-button").length &&
                        o(".navSidebar-button").on("click", function (e) {
                            e.preventDefault(),
                                e.stopPropagation(),
                                o(".info-group").addClass("isActive");
                        }),
                        0 < o(".close-side-widget").length &&
                            o(".close-side-widget").on("click", function (e) {
                                e.preventDefault(),
                                    o(".info-group").removeClass("isActive");
                            }),
                        o("body").on("click", function (e) {
                            o(".info-group").removeClass("isActive"),
                                o(".cart-group").removeClass("isActive");
                        }),
                        o(".xs-sidebar-widget").on("click", function (e) {
                            e.stopPropagation();
                        });
                });
            },
            MobileMenu: function () {
                $(".open_mobile_menu").on("click", function () {
                    $(".mobile_menu_wrap").toggleClass("mobile_menu_on");
                });
                $(".open_mobile_menu").on("click", function () {
                    $("body").toggleClass("mobile_menu_overlay_on");
                });
                if ($(".mobile_menu li.dropdown ul").length) {
                    $(".mobile_menu li.dropdown").append(
                        '<div class="dropdown-btn"><span class="fas fa-caret-right"></span></div>'
                    );
                    $(".mobile_menu li.dropdown .dropdown-btn").on(
                        "click",
                        function () {
                            $(this).prev("ul").slideToggle(500);
                        }
                    );
                }
                $(".dropdown-btn").on("click", function () {
                    $(this).toggleClass("toggle-open");
                });
            },
            scrollTop: function () {
                $(window).on("scroll", function () {
                    if ($(this).scrollTop() > 200) {
                        $(".scrollup").fadeIn();
                    } else {
                        $(".scrollup").fadeOut();
                    }
                });

                $(".scrollup").on("click", function () {
                    $("html, body").animate(
                        {
                            scrollTop: 0,
                        },
                        800
                    );
                    return false;
                });
                jQuery(".video_box").magnificPopup({
                    disableOn: 200,
                    type: "iframe",
                    mainClass: "mfp-fade",
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false,
                });
            },
            ProjectFilterSlider: function () {
                $(".arck-project-slider").slick({
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    arrows: false,
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 1500,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                            },
                        },
                        {
                            breakpoint: 1025,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 700,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".filter li").on("click", function () {
                    let currentProject = $(this).text() + " " + "Projects";
                    $(".latest-projects").text(currentProject);
                    var filter = $(this).data("filter");
                    $(".arck-project-slider").slick("slickUnfilter");

                    if (filter == "one") {
                        $(".arck-project-slider").slick("slickFilter", ".one");
                    } else if (filter == "two") {
                        $(".arck-project-slider").slick("slickFilter", ".two");
                    } else if (filter == "three") {
                        $(".arck-project-slider").slick(
                            "slickFilter",
                            ".three"
                        );
                    } else if (filter == "four") {
                        $(".arck-project-slider").slick("slickFilter", ".four");
                    } else if (filter == "five") {
                        $(".arck-project-slider").slick("slickFilter", ".five");
                    } else if (filter == "six") {
                        $(".arck-project-slider").slick("slickFilter", ".six");
                    } else if (filter == "all") {
                        $(".arck-project-slider").slick("slickUnfilter");
                    }
                });
                $(".arck-project-filter-btn ul li").on("click", function () {
                    $(".arck-project-filter-btn ul li.active").removeClass(
                        "active"
                    );
                    $(this).addClass("active");
                });
            },
            CounterUp: function () {
                $(".counter").counterUp({
                    delay: 10,
                    time: 1000,
                });
            },

            CarouselSliderJS: function () {
                $("#arck-slider-main_1").slick({
                    arrow: false,
                    dots: true,
                    infinite: false,
                    fade: true,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
                $("#arck-slider-main_2").slick({
                    arrow: true,
                    dots: true,
                    infinite: false,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: ".main_left_arrow",
                    nextArrow: ".main_right_arrow",
                });

                $(".arck-testimonial-slider").slick({
                    arrow: false,
                    dots: true,
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
                $(".arck-project-details-slider").slick({
                    arrow: true,
                    dots: false,
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
                $(".arck-testimonial-slider-2").slick({
                    arrow: false,
                    dots: true,
                    infinite: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                infinite: true,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".arck-team-slider, .shop-more-slider").slick({
                    arrow: false,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 2,
                                infinite: true,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".arck-sponsor-slider").slick({
                    arrow: false,
                    dots: false,
                    infinite: true,
                    slidesToShow: 5,
                    autoplay: true,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".archx-about-sponsor-wrapper").slick({
                    arrow: false,
                    dots: false,
                    infinite: true,
                    slidesToShow: 4,
                    autoplay: true,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".arck-service-details-slider").slick({
                    arrow: true,
                    dots: false,
                    infinite: true,
                    slidesToShow: 2,
                    autoplay: true,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".archx-project-slider").slick({
                    arrow: true,
                    dots: false,
                    infinite: true,
                    slidesToShow: 5,
                    autoplay: false,
                    slidesToScroll: 1,
                    prevArrow: ".ar-pro_left_arrow",
                    nextArrow: ".ar-pro_right_arrow",
                    responsive: [
                        {
                            breakpoint: 1300,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },

                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".archx-work-process-system-slider").slick({
                    arrow: false,
                    dots: false,
                    infinite: true,
                    slidesToShow: 3,
                    autoplay: true,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".archx-produce-slider").slick({
                    arrow: false,
                    dots: false,
                    infinite: true,
                    slidesToShow: 5,
                    autoplay: true,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
                $(".archx-team-slider-area").slick({
                    arrow: false,
                    dots: false,
                    infinite: false,
                    slidesToShow: 4,
                    autoplay: false,
                    slidesToScroll: 1,
                    prevArrow: ".ar-team_left_arrow",
                    nextArrow: ".ar-team_right_arrow",
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 700,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
            },
            ProjectGridFilter: function () {

                var $grid = $(".grid").imagesLoaded(function () {
                    $grid.masonry({
                        percentPosition: true,
                        itemSelector: ".grid-item",
                        columnWidth: ".grid-sizer",
                    });
                });

                var $grid = $(".grid").isotope({
                    itemSelector: ".grid-item",
                    layoutMode: "fitRows",
                });

                var filterFns = {
                    numberGreaterThan50: function () {
                        var number = $(this).find(".number").text();
                        return parseInt(number, 10) > 50;
                    },
                    ium: function () {
                        var name = $(this).find(".name").text();
                        return name.match(/ium$/);
                    },
                };
                $(".button-group").on("click", "button", function () {
                    var filterValue = $(this).attr("data-filter");
                    filterValue = filterFns[filterValue] || filterValue;
                    $grid.isotope({ filter: filterValue });
                });

                $(".button-group").each(function (i, buttonGroup) {
                    var $buttonGroup = $(buttonGroup);
                    $buttonGroup.on("click", "button", function () {
                        $buttonGroup
                            .find(".is-checked")
                            .removeClass("is-checked");
                        $(this).addClass("is-checked");
                    });
                });
            },
        },
    };
    jQuery(document).ready(function () {
        Dtech.init();
    });
})();
