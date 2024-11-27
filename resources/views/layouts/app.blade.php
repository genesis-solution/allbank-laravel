<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="author" content="TechyDevs"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Allbank1') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('images/favicon.png')}}"/>
        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite([
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.min.css',
                'resources/css/jquery.fancybox.css',
                'resources/css/style.css',
                ])
    </head>
    <body>
        <!-- start per-loader -->
        <div class="loader-container">
            <div class="loader-ripple">
                <div></div>
                <div></div>
            </div>
        </div>

        @include('layouts.header')
        <!-- end per-loader -->
{{--        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">--}}

{{--            @include('layouts.navigation')--}}

            <!-- Page Heading -->
{{--            @if (isset($header))--}}
{{--                <header class="bg-white dark:bg-gray-800 shadow">--}}
{{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                        {{ $header }}--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--            @endif--}}

            <!-- Page Content -->



{{--        </div>--}}

        {{ $slot }}

        @include('layouts.footer')

        <!-- Template JS Files -->
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
        <!-- Start counter js -->
        <script src="{{asset('js/waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <!-- end counter js -->
        <script src="{{asset('js/jquery.lazy.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
