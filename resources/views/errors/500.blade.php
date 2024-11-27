<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Waiting') }}
        </h2>
    </x-slot>



    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
    </section><!-- end hero-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
    START ERROR AREA
================================= -->
    <section class="error-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <div class="error-content mb-5 mb-lg-0">
                        <h2 class="font-weight-bold mb-3">We can't find the page you're looking for</h2>
                        <p class="mb-4">That link didn't work. Perhaps you'd like to <a href="{{url('/dashboard')}}" class="text-color btn-link">learn about allbank1</a> or get help from
                            <a href="{{url('/dashboard')}}" class="text-color btn-link">Allbank1 Support</a>
                        </p>
                        <a href="{{url('/dashboard')}}" class="btn btn-primary w-100">Go to Allbank1.com <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end error-content -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="error-image text-lg-right">
                        <img src="{{asset('images/img-loading.jpg')}}" data-src="images/404-img.png" alt="error image" class="lazy img-fluid">
                    </div><!-- end error-image -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end error-area-->
    <!-- ================================
        END ERROR AREA
    ================================= -->


</x-app-layout>

