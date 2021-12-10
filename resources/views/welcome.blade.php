<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @livewireStyles()
    @yield('styles')
    <style>
        .select2-selection__rendered {
            line-height: 35px !important;
        }

        .select2-container .select2-selection--single {
            height: 40px !important;
        }

        .select2-selection__arrow {
            height: 40px !important;
        }

    </style>
    <style>
        @media(min-width:992px) {
            body {
                padding-top: 75px;
            }
        }

        .card {
            width: 350px;
            background-color: #efefef;
            border: none;
            cursor: pointer;
            transition: all 0.5s;
            border-radius: 8px;
        }

        .image img {
            transform: scale(1.5)
        }

        .btn-cus {
            height: 140px;
            width: 140px;
            border-radius: 50%
        }

        .name {
            font-size: 22px;
            font-weight: bold
        }

        .idd {
            font-size: 14px;
            font-weight: 600
        }

        .idd1 {
            font-size: 12px
        }

        .number {
            font-size: 22px;
            font-weight: bold
        }

        .follow {
            font-size: 12px;
            font-weight: 500;
            color: #444444
        }

        .btn1 {
            height: 40px;
            width: 150px;
            border: none;
            background-color: rgb(36, 124, 255, 0.8) !important;
            color: #0f0f0f;
            font-size: 15px;
            border-radius: 8px;
        }

        .text span {
            font-size: 13px;
            color: #545454;
            font-weight: 500
        }

        .icons i {
            font-size: 19px
        }

        hr .new1 {
            border: 1px solid
        }

        .join {
            font-size: 14px;
            color: #a0a0a0;
            font-weight: bold
        }

        .date {
            background-color: #ccc
        }

        .hero-banner h1 {
            font-size: 48px;
        }

        .hero-banner .btn {
            position: relative;
            overflow: hidden;
            z-index: 9;
        }

        .hero-banner .btn-primary {
            color: #2f2f41;
            background-color: rgba(1, 164, 121, 0.1);
            border-color: #01a479;
        }

        .hero-banner .btn:before {
            content: "";
            background: #ed5561;
            width: 4px;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            -webkit-transition: all 0.5s ease-in-out 0s;
            -moz-transition: all 0.5s ease-in-out 0s;
            -ms-transition: all 0.5s ease-in-out 0s;
            -o-transition: all 0.5s ease-in-out 0s;
            transition: all 0.5s ease-in-out 0s;
        }

        .hero-banner .btn:hover:before {
            width: 100%;
        }

        li {
            list-style-type: none;
        }

    </style>
</head>

<body id="top">
    <main>
        <nav class="shadow-lg navbar navbar-expand-lg bg-light fixed-top">
            <div class="container">
                <a class="mx-auto navbar-brand d-lg-none" href="/">
                    UMDAA
                    <strong class="d-block text-dark fw-bold h5">Health Care</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="mx-auto navbar-nav">
                        <a class="navbar-brand d-none d-lg-block" href="/">
                            UMDAA
                            <span class="text-dark">Health Care</span>
                        </a>
                    </ul>
                </div>

            </div>
        </nav>
        <section class="hero" id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg') }}"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="search">
            <div class="container">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        @livewire('live-search')
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-0 section-padding" id="review">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-4 text-center mb-lg-5">Our Patient Reviews</h2>
                        <div class="owl-carousel reviews-carousel">
                            @foreach ($data as $item)
                                <figure class="flex-wrap rounded reviews-thumb d-flex align-items-center">
                                    <div class="reviews-stars">
                                        @for ($i = 1; $i <= $item->stars; $i++)
                                            <i class="bi-star-fill"></i>
                                        @endfor
                                        @for ($i = 1; $i <= 5 - $item->stars; $i++)
                                            <i class="bi-star"></i>
                                        @endfor
                                    </div>
                                    <p class="mt-2 mb-0 text-primary d-block w-100">
                                        <strong>Dr. {{ $item->doctor->name }}</strong>
                                    </p>
                                    <p class="reviews-text w-100">{{ $item->review }}</p>
                                    <figcaption class="ms-4">
                                        <strong>{{ $item->name }}</strong>
                                    </figcaption>
                                </figure>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="site-footer section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 me-auto col-12">
                    <h5 class="mb-3 mb-lg-4">Opening Hours</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            Sunday : Closed
                        </li>
                        <li class="list-group-item d-flex">
                            Monday - Saturday
                            <span>8:00 AM - 8:00 PM</span>
                        </li>
                    </ul>
                </div>
                <div class="my-4 col-lg-2 col-md-6 col-12 my-lg-0">
                    <h5 class="mb-3 mb-lg-4">Our Office</h5>
                    <p><a href="tel:+91-8125920072">+91-8125920072</a></p>
                    <p>Tolichowki, Hyderabad, Telangana - 500008</p>
                </div>
            </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        ;
        (function($) {
            'use strict'

            // NAVBAR
            $('.navbar-nav .nav-link').click(function() {
                $('.navbar-collapse').collapse('hide')
            })

            // REVIEWS CAROUSEL
            $('.reviews-carousel').owlCarousel({
                center: true,
                loop: true,
                nav: true,
                dots: true,
                autoplay: false,
                autoplaySpeed: 300,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                        margin: 100
                    },
                    1280: {
                        items: 2,
                        margin: 100
                    }
                }
            })

            // Banner Carousel
            var myCarousel = document.querySelector('#myCarousel')
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 15000
            })
        })(window.jQuery)
    </script>
    @livewireScripts()
    @yield('scripts')
</body>

</html>
