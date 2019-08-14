@extends('layout.app')

@section('container')
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
                    <a href="#" class="text-uppercase header-btn">Load More Item</a>
                </div>
                <div class="col-lg-6 col-md-12 no-padding banner-right">
                    <img class="img-fluid" src="img/header-img.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Application Info silder  -->
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

@endsection

