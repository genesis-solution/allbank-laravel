<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome To Login') }}
        </h2>
    </x-slot>

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between position-relative">
                <h2 class="sec-title text-white my-2">Login</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
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
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="font-weight-bold mb-1">Login to your account</h3>
                            <p class="font-size-15"></p>
                        </div>
                        <hr class="border-top-gray my-4">

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="form-group">
                                <x-text-input id="email" class="form-control form--control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email address" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-text-input id="password" class="form-control form--control password-field"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="current-password"
                                    placeholder="Password"/>

                                    <a href="javascript:void(0)" class="position-absolute top-0 right-0 h-100 btn toggle-password" title="Toggle show/hide password">
                                        <i class="far fa-eye eye-on"></i>
                                        <i class="far fa-eye-slash eye-off"></i>
                                    </a>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="signin-remember">
                                    <label class="custom-control-label font-weight-normal" for="signin-remember">Remember Me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="btn-link font-size-15 font-weight-normal">Forgot your password?</a>
                                @endif
                            </div><!-- end form-group -->
                            <x-primary-button class="btn btn-primary w-100">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </form>
                        <p class="font-size-14 pt-2 text-center font-weight-normal">Don't have an account? <a href="{{ route('register') }}" class="text-color btn-link">Sign Up</a></p>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
           START CONTACT AREA
    ================================= -->


</x-app-layout>

