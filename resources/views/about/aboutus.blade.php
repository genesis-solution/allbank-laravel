<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About US') }}
        </h2>
    </x-slot>


    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between position-relative">
                <h2 class="sec-title text-white my-2">About Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
           START ABOUT AREA
    ================================= -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-content mb-5 mb-lg-0">
                        <h2 class="sec-title mb-5">Awards Winning Digital Cryptocurrency Platform</h2>
                        <p class="sec-desc d-flex align-items-center text-color">
                            <span class="sec-year-time mr-3">30</span>
                            <span>Years of experience in digital cryptocurrency business Lorem ipsum dolor sit amet</span>
                        </p>
                        <p class="mt-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at cquie consequatur deserunt dignissimos excepturi illo ipsa ipsum minima, obcaecati officiis qui quidem quos, sunt unde, voluptas.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloreque laudantum.</p>
                    </div><!-- end about-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="img-box">
                        <img src="images/img-loading.jpg" data-src="images/about-img.jpg" alt="about-us" class="img__item lazy"/>
                        <img src="images/img-loading.jpg" data-src="images/about-img2.jpg" alt="about-us" class="img__item img__item-2 lazy"/>
                        <a class="icon-element play-btn" href="https://www.youtube.com/watch?v=GmOzih6I1zs" data-fancybox="about-video">
                            <i class="fas fa-play"></i>
                        </a>
                        <span class="overflow-text">bitcon</span>
                    </div><!-- end img-box -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
            <div class="row padding-top-120px padding-bottom-60px">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <div class="icon-element mb-4">
                            <i class="fal fa-sack-dollar"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">85389</h2>
                        <p class="counter-title">Total Transactions</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item mt-lg-5">
                        <div class="icon-element mb-4">
                            <i class="fal fa-wallet"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">6540</h2>
                        <p class="counter-title">Bitcoin Wallet</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <div class="icon-element mb-4">
                            <i class="fal fa-users"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">7540</h2>
                        <p class="counter-title">Happy Users</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item mt-lg-5">
                        <div class="icon-element mb-4">
                            <i class="fal fa-hands-usd"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">5721</h2>
                        <p class="counter-title">Bitcoin Investors</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
            <hr class="border-top-gray my-0">
            <p class="text-center mt-4">Do not hesitate to start with us for better help and services
                <a href="sign-up.html" class="btn-link ml-1">Get Started <i class="fal fa-angle-right ml-1"></i></a>
            </p>
        </div><!-- end container -->
    </section><!-- end about-area -->
    <!-- ================================
           START ABOUT AREA
    ================================= -->

    <!-- ================================
           START TIMELINE AREA
    ================================= -->
    <section class="timeline-area section-padding bg-gray">
        <div class="container">
            <h2 class="sec-title text-center">How We Started Bitcon</h2>
            <ul class="timeline-wrap mt-5">
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">February 2000</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Company was founded</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">March 2010</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Company is growing</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">April 2011</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Development Started</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">May 2012</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Pre-Ico Opens</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">June 2015</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Private Token Round</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">August 2017</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Pre-Ico Closed</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">September 2018</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Development Platform Launch</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
                <li class="timeline">
                    <div class="timeline-prev">
                        <span class="badge badge-md badge-primary">October 2019</span>
                    </div>
                    <div class="timeline-next card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">App Integration Process</h3>
                            <p class="card-desc">Tincidunt elit magnis nulla facilisis sagittis maecenas. sapien nunced amet ultrices, dolores sit ipsum velit purus</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- end container -->
    </section><!-- end timeline-area -->
    <!-- ================================
           START TIMELINE AREA
    ================================= -->

    <!-- ================================
           START TEAM AREA
    ================================= -->
    <section class="team-area section--padding">
        <div class="container">
            <h2 class="sec-title text-center">Meet Our Experts</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center hover-y">
                        <img src="images/img-loading.jpg" data-src="images/team1.jpg" alt="team image" class="card-img-top lazy"/>
                        <div class="card-body">
                            <h4 class="card-title mb-1"><a href="team-single.html">Adam Smith</a></h4>
                            <p class="font-size-15">CEO & founder</p>
                            <div class="social-icons mt-4">
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center hover-y">
                        <img src="images/img-loading.jpg" data-src="images/team2.jpg" alt="team image" class="card-img-top lazy"/>
                        <div class="card-body">
                            <h4 class="card-title mb-1"><a href="team-single.html">Pam Sharon</a></h4>
                            <p class="font-size-15">Director</p>
                            <div class="social-icons mt-4">
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center hover-y">
                        <img src="images/img-loading.jpg" data-src="images/team3.jpg" alt="team image" class="card-img-top lazy"/>
                        <div class="card-body">
                            <h4 class="card-title mb-1"><a href="team-single.html">Richard Pam</a></h4>
                            <p class="font-size-15">Bitcoin Consultant</p>
                            <div class="social-icons mt-4">
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center hover-y">
                        <img src="images/img-loading.jpg" data-src="images/team4.jpg" alt="team image" class="card-img-top lazy"/>
                        <div class="card-body">
                            <h4 class="card-title mb-1"><a href="team-single.html">Kamran Adi</a></h4>
                            <p class="font-size-15">Bitcoin Developer</p>
                            <div class="social-icons mt-4">
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end team-area -->
    <!-- ================================
        START TEAM AREA
    ================================= -->

    <!-- ================================
           START HOW-IT-WORKS AREA
    ================================= -->
    <section class="how-it-works-area bg-gray section-padding text-center overflow-hidden">
        <div class="container">
            <h2 class="sec-title text-center">We've Well Experience in Bitcoin Trading</h2>
            <div class="col-lg-10 mx-auto mt-5">
                <div class="mining-content-wrap">
                    <div class="generic-video-img-wrap">
                        <img src="images/img-loading.jpg" data-src="images/blog-img8.jpg" alt="mining image" class="generic-video__img lazy">
                        <a class="icon-element play-btn icon-element-lg hover-y" href="https://www.youtube.com/watch?v=GmOzih6I1zs" data-fancybox="preview-video">
                            <i class="fas fa-play"></i>
                        </a>
                    </div><!-- end mining-img -->
                    <div class="mining-content mt-5 half-shape">
                        <ul class="list-items">
                            <li class="text-black d-inline-block mr-4"><i class="fal fa-check icon bg-1 text-white"></i>Instant Transactions</li>
                            <li class="text-black d-inline-block mr-4"><i class="fal fa-check icon bg-2 text-white"></i>Secure User Servers</li>
                            <li class="text-black d-inline-block mr-4"><i class="fal fa-check icon bg-3 text-white"></i>Bitcoin Exchange</li>
                        </ul>
                        <p class="pt-4 pb-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you  are going to use a passage of Lorem Ipsum dolor sit amet</p>
                        <a href="sign-up.html" class="btn btn-primary">Let's Start Now</a>
                    </div><!-- end mining-item -->
                </div><!-- end mining-content -->
            </div><!-- end col-lg-10 -->
        </div><!-- end container -->
    </section><!-- end how-it-works-area -->
    <!-- ================================
           START HOW-IT-WORKS AREA
    ================================= -->

    <hr class="border-top-gray my-0">

    <!-- ================================
           START CLIENT-LOGO AREA
    ================================= -->
    <section class="client-logo-area section-padding position-relative">
        <span class="ring-shape ring-shape-1 position-absolute"></span>
        <span class="ring-shape ring-shape-2 position-absolute"></span>
        <span class="ring-shape ring-shape-3 position-absolute"></span>
        <span class="ring-shape ring-shape-4 position-absolute"></span>
        <span class="ring-shape ring-shape-5 position-absolute"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2 class="sec-title mb-4 mb-lg-0">Trusted by Bitcoin Business</h2>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-7">
                    <div class="client-logo-carousel-2 owl-carousel">
                        <div class="client-logo-item d-inline-block">
                            <img src="images/client1.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="images/client2.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="images/client3.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="images/client4.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="images/client5.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                    </div><!-- end client-logo-carousel -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end client-logo-area -->
    <!-- ================================
           START CLIENT-LOGO AREA
    ================================= -->

    <!-- ================================
           START TESTIMONIAL AREA
    ================================= -->
    <section class="testimonial-area section-padding text-center position-relative bg-gray">
        <img src="images/small-team1.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team2.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team3.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team4.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team5.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team6.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team7.jpg" alt="testtmonial-image" class="random-img"/>
        <div class="container">
            <h2 class="sec-title">Feedback Our Investors</h2>
            <div class="col-lg-8 mx-auto mt-5">
                <div class="client-testimonial owl-carousel owl-theme">
                    <div class="testimonial-card">
                        <div class="testimonial__img">
                            <span class="testimonial__img-circle"></span>
                            <img src="images/small-team1.jpg" alt="testimonial image" />
                        </div>
                        <p class="testimonial__desc">
                            Enjoy the diversity of ThePin. Check this numerous demos, made
                            for different purposes. Easy to import & highly customizable.
                            All of the presented elements, layouts & styles can be theme.
                        </p>
                        <h4 class="testimonial__title">Richard_evil</h4>
                        <span class="testimonial__meta">United States</span>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testimonial__img">
                            <span class="testimonial__img-circle"></span>
                            <img src="images/small-team2.jpg" alt="testimonial image" />
                        </div>
                        <p class="testimonial__desc">
                            Enjoy the diversity of ThePin. Check this numerous demos, made
                            for different purposes. Easy to import & highly customizable.
                            All of the presented elements, layouts & styles can be theme.
                        </p>
                        <h4 class="testimonial__title">Denwen_evil</h4>
                        <span class="testimonial__meta">Australia</span>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testimonial__img">
                            <span class="testimonial__img-circle"></span>
                            <img src="images/small-team3.jpg" alt="testimonial image" />
                        </div>
                        <p class="testimonial__desc">
                            Enjoy the diversity of ThePin. Check this numerous demos, made
                            for different purposes. Easy to import & highly customizable.
                            All of the presented elements, layouts & styles can be theme.
                        </p>
                        <h4 class="testimonial__title">Amanda_evil</h4>
                        <span class="testimonial__meta">United Kingdom</span>
                    </div><!-- end testimonial-card -->
                </div><!-- end client-testimonial -->
            </div><!-- end col-lg-8 -->
        </div><!-- end container -->
    </section><!-- end testimonial-area -->
    <!-- ================================
           START TESTIMONIAL AREA
    ================================= -->



</x-app-layout>
