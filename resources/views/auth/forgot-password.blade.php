<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Forgot your password') }}
        </h2>
    </x-slot>


    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between position-relative">
                <h2 class="sec-title text-white my-2">Recover Password</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Recover Password</li>
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
                        <h3 class="font-weight-bold mb-1">Reset Password!</h3>
                        <p class="font-size-15">Enter the email of your account to reset password. Then you will receive a link to email to reset the password.If you have any issue about reset password
                            <a href="{{url('/contact')}}" class="text-color btn-link">Contact Us</a>
                        </p>
                        <hr class="border-top-gray my-4">

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">

                            @csrf

                            <div class="form-group">
                                <x-text-input id="email" class="form-control form--control" type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div><!-- end form-group -->
                            <x-primary-button class="btn btn-primary w-100">
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>
                        </form>
                        <div class="d-flex flex-wrap align-items-center justify-content-between mt-3">
                            <a href="{{ route('login') }}" class="text-color btn-link">Login</a>
                            <p class="font-size-14 pt-2 text-center font-weight-normal">Don't have an account? <a href="{{ route('register') }}" class="text-color btn-link">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
           START CONTACT AREA
    ================================= -->


</x-app-layout>

