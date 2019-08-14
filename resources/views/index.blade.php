@extends('layout.app')

@section('container')


<!-- start banner Area -->
<section class="banner-area" id="home">
    <!-- Start Header Area -->
@include('common.header')
    <!-- End Header Area -->
    <div class="container">
        <div class="row justify-content-end fullscreen align-items-center">
            <div class="col-lg-6 col-md-12 banner-left">
                <h1 class="text-white">
                    The Best App <br>
                    in the Universe
                </h1>
                <p class="mx-auto text-white  mt-20 mb-40">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                </p>
                <a href="#" class="text-uppercase header-btn">Load More Item</span></a>
            </div>
            <div class="col-lg-6 col-md-12 no-padding banner-right">
                <img class="img-fluid" src="img/header-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start cat Area -->
<section class="cat-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Latest News from all categories</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-cat d-flex flex-column">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
                    <h4 class="mb-20" style="margin-top: 23px;">Maintenance</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
                    <h4 class="mt-40 mb-20">Residental Service</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
                    <h4 class="mt-40 mb-20">Commercial Service</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End cat Area -->


<!-- Start about Area -->
<section class="about-area section-gap">
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex">
            <div class="col-lg-6 about-left">
                <h1>
                    We Believe that <br>
                    Interior beautifies the <br>
                    Total Architecture
                </h1>
                <p class="mt-20">
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that.
                </p>
                <a href="#" class="btn primary-btn text-uppercase mt-20">see details</a>
            </div>
            <div class="col-lg-6 about-right">
                <img class="img-fluid" src="img/about-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->


<!-- Start service Area -->
<section class="service-area section-gap" id="feature">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Some Features that Made us Unique</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4  col-md-6 mb-30">
                <div class="single-service">
                    <img class="d-block mx-auto mb-30" src="img/f1.png" alt="">
                    <h4><a href="#">Expert Technicians</a></h4>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 mb-30">
                <div class="single-service">
                    <img class="d-block mx-auto mb-30" src="img/f2.png" alt="">
                    <h4><a href="#">Professional Service</a></h4>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 mb-30">
                <div class="single-service">
                    <img class="d-block mx-auto mb-30" src="img/f3.png" alt="">
                    <h4><a href="#">Great Support</a></h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-service">
                    <img class="d-block mx-auto mb-30" src="img/f4.png" alt="">
                    <h4><a href="#">Expert Technicians</a></h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-service">
                    <img class="d-block mx-auto mb-30" src="img/f5.png" alt="">
                    <h4><a href="#">Professional Service</a></h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-service">
                    <img class="d-block mx-auto mb-30" src="img/f6.png" alt="">
                    <h4><a href="#">Great Support</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->


<!-- Start Video Area -->
<section class="video-area pt-40 pb-40">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="video-content">
            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="play-btn"><img src="img/play-btn.png" alt=""></a>
            <div class="video-desc">
                <h3 class="h2 text-white">Being unique is the preference</h3>
                <h4 class="text-white">Youtube video will appear in popover</h4>
            </div>
        </div>
    </div>
</section>
<!-- Start Video Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Some Features that Made us Unique</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-feature-carusel">
                <div class="item single-carusel relative">
                    <div class="image-wrap">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/s1.jpg" alt="">
                    </div>
                </div>
                <div class="item single-carusel relative">
                    <div class="image-wrap">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/s2.jpg" alt="">
                    </div>

                </div>
                <div class="item single-carusel relative">
                    <div class="image-wrap">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/s3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->


<!-- Start price Area -->
<section class="price-area section-gap" id="price">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Choose the Perfect Plan for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price">
                    <div class="top-sec d-flex justify-content-between">
                        <div class="top-left">
                            <h4>Standard</h4>
                            <p>For the <br>individuals</p>
                        </div>
                        <div class="top-right">
                            <h1>£199</h1>
                        </div>
                    </div>
                    <div class="bottom-sec">
                        <p>
                            “Few would argue that, despite the advancements
                        </p>
                    </div>
                    <div class="end-sec">
                        <ul>
                            <li>2.5 GB Free Photos</li>
                            <li>Secure Online Transfer Indeed</li>
                            <li>Unlimited Styles for interface</li>
                            <li>Reliable Customer Service</li>
                            <li>Manual Backup Provided</li>
                        </ul>
                        <button class="primary-btn price-btn mt-20">Purchase Plan</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <div class="top-sec d-flex justify-content-between">
                        <div class="top-left">
                            <h4>Business</h4>
                            <p>For the <br>small Company</p>
                        </div>
                        <div class="top-right">
                            <h1>£399</h1>
                        </div>
                    </div>
                    <div class="bottom-sec">
                        <p>
                            “Few would argue that, despite the advancements
                        </p>
                    </div>
                    <div class="end-sec">
                        <ul>
                            <li>2.5 GB Free Photos</li>
                            <li>Secure Online Transfer Indeed</li>
                            <li>Unlimited Styles for interface</li>
                            <li>Reliable Customer Service</li>
                            <li>Manual Backup Provided</li>
                        </ul>
                        <button class="primary-btn price-btn mt-20">Purchase Plan</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <div class="top-sec d-flex justify-content-between">
                        <div class="top-left">
                            <h4>Ultimate</h4>
                            <p>For the <br>large Company</p>
                        </div>
                        <div class="top-right">
                            <h1>£499</h1>
                        </div>
                    </div>
                    <div class="bottom-sec">
                        <p>
                            “Few would argue that, despite the advancements
                        </p>
                    </div>
                    <div class="end-sec">
                        <ul>
                            <li>2.5 GB Free Photos</li>
                            <li>Secure Online Transfer Indeed</li>
                            <li>Unlimited Styles for interface</li>
                            <li>Reliable Customer Service</li>
                            <li>Manual Backup Provided</li>
                        </ul>
                        <button class="primary-btn price-btn mt-20">Purchase Plan</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End price Area -->

<!-- Start faq Area -->
<section class="faq-area section-gap" id="faq">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Frequently Asked Questions</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="counter-left col-lg-3 col-md-3">
                <div class="single-facts">
                    <h2 class="counter">5962</h2>
                    <p>Projects Completed</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">2394</h2>
                    <p>New Projects</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">1439</h2>
                    <p>Tickets Submitted</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">933</h2>
                    <p>Cup of Coffee</p>
                </div>
            </div>
            <div class="faq-content col-lg-9 col-md-9">
                <div class="single-faq">
                    <h2>
                        Are your Templates responsive?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
                <div class="single-faq">
                    <h2>
                        Does it have all the plugin as mentioned?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
                <div class="single-faq">
                    <h2>
                        Can i use the these theme for my client?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End faq Area -->

<!-- Start call-to-action Area -->
<section class="call-to-action-area section-gap">
    <div class="container">
        <div class="row justify-content-center top">
            <div class="col-lg-12">
                <h1 class="text-white text-center">Download This App Today!</h1>
                <p class="text-white text-center mt-30">
                    It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
                </p>
            </div>
        </div>
        <div class="row justify-content-center d-flex">
            <div class="download-button d-flex flex-row justify-content-center mt-30">
                <div class="buttons flex-row d-flex">
                    <i class="fa fa-apple" aria-hidden="true"></i>
                    <div class="desc">
                        <a href="#">
                            <p>
                                <span>Available</span> <br>
                                on App Store
                            </p>
                        </a>
                    </div>
                </div>
                <div class="buttons flex-row d-flex">
                    <i class="fa fa-android" aria-hidden="true"></i>
                    <div class="desc">
                        <a href="#">
                            <p>
                                <span>Available</span> <br>
                                on Play Store
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End call-to-action Area -->

@endsection
