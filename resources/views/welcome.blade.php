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
    @livewireStyles()
    <style>
        .card {
            width: 350px;
            background-color: #efefef;
            border: none;
            cursor: pointer;
            transition: all 0.5s
        }

        .image img {
            transition: all 0.5s
        }

        .card:hover .image img {
            transform: scale(1.5)
        }

        .btn {
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
            background-color: #000;
            color: #aeaeae;
            font-size: 15px
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

    </style>
</head>

<body id="top">
    <main>
        <nav class="shadow-lg navbar navbar-expand-lg bg-light fixed-top">
            <div class="container">
                <a class="mx-auto navbar-brand d-lg-none" href="/">
                    UMDAA
                    <strong class="d-block">Health Care</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="mx-auto navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://www.facebook.com/umdaahealthcare"><i
                                    class="bi bi-facebook"></i><span
                                    class="ms-3 d-md-inline d-sm-inline d-lg-none">Facebook</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank"
                                href="https://www.instagram.com/umdaahealthcare/"><i class="bi bi-instagram"></i><span
                                    class="ms-3 d-md-inline d-sm-inline d-lg-none">Instagram</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank"
                                href="https://www.linkedin.com/company/umdaa-health-care/"><i
                                    class="bi bi-linkedin"></i><span
                                    class="ms-3 d-md-inline d-sm-inline d-lg-none">Linkedin</span></a>
                        </li>
                        <a class="navbar-brand d-none d-lg-block" href="/">
                            UMDAA
                            <strong class="d-block">Health Care</strong>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://twitter.com/umdaahealthcare"><i
                                    class="bi bi-twitter"></i><span
                                    class="ms-3 d-md-inline d-sm-inline d-lg-none">Twitter</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank"
                                href="https://www.youtube.com/channel/UC4SkMji7pnmzxJEmxdsogMQ"><i
                                    class="bi bi-youtube"></i><span
                                    class="ms-3 d-md-inline d-sm-inline d-lg-none">Youtube</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="#search"><i
                                    class="bi bi-search d-lg-inline d-none"></i></a>
                        </li>
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
                                    <img src="images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg"
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
                <div class="col-lg-3 col-md-6 col-12 ms-auto">
                    <h5 class="mb-3 mb-lg-4">Socials</h5>
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/umdaahealthcare" target="_blank"
                                class="social-icon-link bi-facebook"></a></li>
                        <li><a href="https://www.instagram.com/umdaahealthcare/" target="_blank"
                                class="social-icon-link bi-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/company/umdaa-health-care/" target="_blank"
                                class="social-icon-link bi-linkedin"></a></li>
                        <li><a href="https://twitter.com/umdaahealthcare" target="_blank"
                                class="social-icon-link bi-twitter"></a></li>
                        <li><a href="https://www.youtube.com/channel/UC4SkMji7pnmzxJEmxdsogMQ" target="_blank"
                                class="social-icon-link bi-youtube"></a></li>
                    </ul>
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
                interval: 1500
            })

            // REVIEWS NAVIGATION
            function ReviewsNavResize() {
                $('.navbar').scrollspy({
                    offset: -94
                })

                var ReviewsOwlItem = $('.reviews-carousel .owl-item').width()

                $('.reviews-carousel .owl-nav').css({
                    width: ReviewsOwlItem + 'px'
                })
            }

            $(window).on('resize', ReviewsNavResize)
            $(document).on('ready', ReviewsNavResize)

            // HREF LINKS
            $('a[href*="#"]').click(function(event) {
                if (
                    location.pathname.replace(/^\//, '') ==
                    this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    var target = $(this.hash)
                    target = target.length ?
                        target :
                        $('[name=' + this.hash.slice(1) + ']')
                    if (target.length) {
                        event.preventDefault()
                        $('html, body').animate({
                                scrollTop: target.offset().top - 74
                            },
                            1000
                        )
                    }
                }
            })
        })(window.jQuery)
    </script>
    @livewireScripts()
</body>

</html>
