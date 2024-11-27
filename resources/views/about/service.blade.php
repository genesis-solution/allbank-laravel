<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>


    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between position-relative">
                <h2 class="sec-title text-white my-2">Services</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
           START SERVICE AREA
    ================================= -->
    <section class="service-area section--padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y card-bg-on-hover">
                        <div class="card-body">
                            <div class="icon-element">
                                <i class="fal fa-user-lock"></i>
                            </div>
                            <h4 class="card-title mt-4"><a href="service.html">Safe and Secure</a></h4>
                            <p class="card-text">incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud.</p>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y card-bg-on-hover">
                        <div class="card-body">
                            <div class="icon-element">
                                <i class="fal fa-globe"></i>
                            </div>
                            <h4 class="card-title mt-4"><a href="service.html">World Coverage</a></h4>
                            <p class="card-text">incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud.</p>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y card-bg-on-hover">
                        <div class="card-body">
                            <div class="icon-element">
                                <i class="fal fa-wallet"></i>
                            </div>
                            <h4 class="card-title mt-4"><a href="service.html">Payment Options</a></h4>
                            <p class="card-text">incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud.</p>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y card-bg-on-hover">
                        <div class="card-body">
                            <div class="icon-element">
                                <i class="fal fa-mobile-alt"></i>
                            </div>
                            <h4 class="card-title mt-4"><a href="service.html">Mobile App</a></h4>
                            <p class="card-text">incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud.</p>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y card-bg-on-hover">
                        <div class="card-body">
                            <div class="icon-element">
                                <i class="fal fa-piggy-bank"></i>
                            </div>
                            <h4 class="card-title mt-4"><a href="service.html">Cost Efficiency</a></h4>
                            <p class="card-text">incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud.</p>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y card-bg-on-hover">
                        <div class="card-body">
                            <div class="icon-element">
                                <i class="fal fa-project-diagram"></i>
                            </div>
                            <h4 class="card-title mt-4"><a href="service.html">High Liquidity</a></h4>
                            <p class="card-text">incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud.</p>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end service-area -->
    <!-- ================================
       START SERVICE AREA
    ================================= -->


</x-app-layout>

