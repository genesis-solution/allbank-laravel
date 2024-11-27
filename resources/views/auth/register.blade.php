<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sign up') }}
        </h2>
    </x-slot>

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between position-relative">
                <h2 class="sec-title text-white my-2">Sign Up</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="card hover-y">
                        <div class="card-body media">
                            <div class="icon-element text-color fancy-radius mr-4 flex-shrink-0">
                                <i class="fal fa-user-lock"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title mb-2">Safe & Secure</h4>
                                <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta fuga ipsam molestias natus? Architecto illo maiores non reprehenderit vitae.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card hover-y">
                        <div class="card-body media">
                            <div class="icon-element text-color fancy-radius mr-4 flex-shrink-0">
                                <i class="fal fa-mobile"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title mb-2">Mobile App</h4>
                                <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta fuga ipsam molestias natus? Architecto illo maiores non reprehenderit vitae.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card hover-y">
                        <div class="card-body media">
                            <div class="icon-element text-color fancy-radius mr-4 flex-shrink-0">
                                <i class="fal fa-wallet"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title mb-2">Free Wallet</h4>
                                <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta fuga ipsam molestias natus? Architecto illo maiores non reprehenderit vitae.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card hover-y">
                        <div class="card-body media">
                            <div class="icon-element text-color fancy-radius mr-4 flex-shrink-0">
                                <i class="fal fa-money-bill-wave"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title mb-2">Payment Options</h4>
                                <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta fuga ipsam molestias natus? Architecto illo maiores non reprehenderit vitae.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="font-weight-bold mb-1">Create a free account</h3>
                                <p class="font-size-15">Open account for free and start trading Bitcoin now!</p>
                            </div>
                            <hr class="border-top-gray my-4">
                            <form method="POST" action="{{ route('register') }}">

                                @csrf

                                <div class="form-group">
                                    <x-text-input id="name" class="form-control form--control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Full name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <x-text-input id="email" class="form-control form--control" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email address"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <div class="position-relative">
                                        <x-text-input id="password" class="form-control form--control password-field"
                                                      type="password"
                                                      name="password"
                                                      required autocomplete="new-password" placeholder="Password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <a href="javascript:void(0)" class="position-absolute top-0 right-0 h-100 btn toggle-password" title="Toggle show/hide password">
                                            <i class="far fa-eye eye-on"></i>
                                            <i class="far fa-eye-slash eye-off"></i>
                                        </a>
                                    </div>
                                    <small class="form-text d-none">*Minimum 8 characters *At least 1 UPPER CASE *At least 1 number</small>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <div class="position-relative">
                                        <x-text-input id="password_confirmation" class="form-control form--control password-field"
                                                      type="password"
                                                      name="password_confirmation"
                                                      required autocomplete="new-password" placeholder="Confirm password"/>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        <a href="javascript:void(0)" class="position-absolute top-0 right-0 h-100 btn toggle-password" title="Toggle show/hide password">
                                            <i class="far fa-eye eye-on"></i>
                                            <i class="far fa-eye-slash eye-off"></i>
                                        </a>
                                    </div>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="register-policy">
                                        <label class="custom-control-label font-weight-normal" for="register-policy">I agree to the <a href="{{url('terms')}}" class="btn-link">privacy policy</a> and <a href="#" class="btn-link">terms of services</a></label>
                                    </div>
                                </div><!-- end form-group -->
                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="btn btn-primary w-100">
                                        {{ __('Create an Account') }}
                                    </x-primary-button>
                                </div>
                            </form>
                            <p class="font-size-14 pt-2 text-center font-weight-normal">Already have an account? <a href="{{ route('login') }}" class="text-color btn-link">Login</a></p>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
           START CONTACT AREA
    ================================= -->


</x-app-layout>

