<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Terms of Services') }}
        </h2>
    </x-slot>

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between position-relative">
                <div class="my-2">
                    <h2 class="sec-title text-white mb-2">Terms of Services</h2>
                    <p class="text-white">Last revised: 13 January, 2024</p>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Terms of Services</li>
                    </ol>
                </nav>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
           START TERMS AREA
    ================================= -->
    <section class="terms-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Risk Notice</h4>
                            <p class="card-text mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                            <p class="card-text mb-3">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                            <h4 class="card-title mb-2">Saleability</h4>
                            <p class="card-text mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                            <h4 class="card-title mb-2">Customer input errors</h4>
                            <p class="card-text mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                            <h4 class="card-title mb-2">Binding Agreement</h4>
                            <p class="card-text mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                            <h4 class="card-title mb-2">Expired orders</h4>
                            <p class="card-text mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                            <h4 class="card-title mb-2">Choice of Law</h4>
                            <p class="card-text mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                            <h4 class="card-title mb-2">Security</h4>
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Search</h4>
                                <div class="title-shape"><span></span></div>
                                <form method="post" class="mt-4">
                                    <div class="input-group">
                                        <input class="form-control form--control" type="text" name="text" placeholder="Type your search term...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="fal fa-search"></i></button>
                                        </div>
                                    </div><!-- end input-group -->
                                </form>
                            </div>
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Category</h4>
                                <div class="title-shape"><span></span></div>
                                <ul class="list-items mt-4">
                                    <li><a href="#"><i class="fal fa-angle-right mr-2"></i> Bitcoin</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right mr-2"></i> Blockchain</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right mr-2"></i> How To?</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right mr-2"></i> Video Tutorials</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right mr-2"></i> Other</a></li>
                                </ul>
                            </div>
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Meta</h4>
                                <div class="title-shape"><span></span></div>
                                <ul class="list-items mt-4">
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries feed</a></li>
                                    <li><a href="#">Comments feed</a></li>
                                </ul>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end terms-area -->
    <!-- ================================
           START TERMS AREA
    ================================= -->



</x-app-layout>

