<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>


    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between position-relative">
                <h2 class="sec-title text-white my-2">Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
           START CONTACT AREA
    ================================= -->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="alert alert-success alert-message mb-3" role="alert"></div>
            <div class="row">
                <div class="col-lg-8">
                    <form action="" class="contact-form card">
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-2">Feel Free to Write Us a Message</h4>
                            <p class="mb-4 font-size-15">Need to speak to us? Do you have any queries or suggestions? Please contact us about all enquiries including membership and volunteer work using the form below.</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 form-group">
                                    <input id="name" class="form-control form--control" type="text" name="name" placeholder="Full name">
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-md-6 form-group">
                                    <input id="email" class="form-control form--control" type="email" name="email" placeholder="Email address">
                                </div><!-- end col-lg-6 -->
                            </div><!-- end row -->
                            <div class="form-group">
                                <input id="subject" class="form-control form--control" type="text" name="subject" placeholder="Subject">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control form--control" rows="4" placeholder="Write Message Here"></textarea>
                            </div><!-- end form-group -->
                            <button id="send-message-btn" class="btn btn-primary" type="submit">Send Message</button>
                        </div>
                    </form>
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="media-list contact-list">
                                <li class="media mb-4">
                                    <div class="icon-element icon-element-md mr-3 flex-shrink-0">
                                        <i class="fal fa-home"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1 font-weight-semi-bold">Address</h5>
                                        <p class="font-size-14">Melbourne, Australia, 105 South Park Avenue</p>
                                    </div>
                                </li>
                                <li class="media mb-4">
                                    <div class="icon-element icon-element-md mr-3 flex-shrink-0">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1 font-weight-semi-bold">Phone Numbers</h5>
                                        <p class="font-size-14">+1-302-123-4567</p>
                                        <p class="font-size-14">+1-302-123-4567</p>
                                    </div>
                                </li>
                                <li class="media mb-4">
                                    <div class="icon-element icon-element-md mr-3 flex-shrink-0">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1 font-weight-semi-bold">Email Addresses</h5>
                                        <p class="font-size-14"><a href="mailto:info@bitcon.com" class="btn-link">info@bitcon.com</a></p>
                                        <p class="font-size-14"><a href="mailto:info@bitcon.com" class="btn-link">info@bitcon.com</a></p>
                                    </div>
                                </li>
                                <li class="media mb-4">
                                    <div class="icon-element icon-element-md mr-3 flex-shrink-0">
                                        <i class="fal fa-link"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-3 font-weight-semi-bold">Social Profiles</h5>
                                        <div class="social-icons">
                                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
           START CONTACT AREA
    ================================= -->


</x-app-layout>

