@extends('layouts.master')
@section('children')
@include('layouts.navbar')


<section class="hero spad set-bg" data-setbg="/assets/img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h5>WELCOME HIROTO</h5>
                        <h2>Experience the greatest for you holidays.</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>ABOUT US</h5>
                            <h2>Welcome Hiroto Hotel In Street L’Abreuvoir</h2>
                        </div>
                        <p class="first-para">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p class="last-para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque.</p>
                        <img src="/assets/img/home-about/sign.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="/assets/img/home-about/home-about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Home Room Section Begin -->
    <section class="home-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>OUR ROOM</h5>
                        <h2>Explore Our Hotel</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="/assets/img/home-room/hr-1.jpg">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>55<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="/assets/img/home-room/hr-2.jpg">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>85<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="/assets/img/home-room/hr-3.jpg">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>94<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="/assets/img/home-room/hr-4.jpg">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>71<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Chooseus Section Begin -->
    <div class="chooseus spad set-bg" data-setbg="/assets/img/chooseus-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h5>WHY CHOOSE US</h5>
                            <h2>Contact us now to get the latest deals and for the next booking</h2>
                        </div>
                        <a href="#" class="primary-btn">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chooseus Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery spad pb-5">
        <div class="gallery__text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="section-title">
                            <h5>OUR GALLERY</h5>
                            <h2>Explore The Most Beautiful In The Hotel</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery__title">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Sunt in culpa qui officia deserunt mollit anim.</p>
                            <a href="#" class="primary-btn">View Gallery <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__slider owl-carousel">
            <div class="gallery__item small__item set-bg" data-setbg="/assets/img/gallery/gallery-1.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="/assets/img/gallery/gallery-2.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="/assets/img/gallery/gallery-3.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="/assets/img/gallery/gallery-4.jpg"></div>
        </div>
    </section>
    <!-- Gallery Section End -->

    @include('layouts.footer')
    @endsection