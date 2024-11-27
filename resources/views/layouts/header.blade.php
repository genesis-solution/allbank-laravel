<!-- ================================
            START HEADER AREA
================================= -->

<style>
    /* Style the dropdown button */
    .dropbtn {
        background-color: #3498db;
        color: white;
        padding: 12px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* Dropdown button on hover & focus */
    .dropbtn:hover, .dropbtn:focus {
        background-color: #2980b9;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
        right: 0; /* Align dropdown to the right */
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #2980b9;
    }


</style>
<header class="header-area">
    <div class="main-menu-header py-3">
        <div class="container">
            <div class="main-menu-wrapper bg-transparent rounded-0 p-0">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <a href="{{ url('/')}}" class="main-logo">
                            <img class="sticky-logo-hide" src="{{ asset('images/logo-white.png') }}" alt="logo">
                            <img class="sticky-logo-show" src="{{ asset('images/logo-black.png') }}" alt="logo">
                        </a>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="main-navbar d-flex align-items-center justify-content-between">
                            <nav class="main-nav main-nav-white text-capitalize main-nav-2">
                                <ul>
                                    <li>
                                        <a href="{{url('/pricing')}}">pricing</a>
                                    </li>

                                    <li class="has-mega-menu">
                                        <a href="{{url('/about')}}">About Us <i class="fal fa-angle-down font-size-12"></i></a>
                                        <div class="drop-menu mega-menu" style="max-width: 200px">
                                            <ul class="row no-gutters">
                                                <li class="mega-menu-item">
                                                    <ul>
                                                        <li><a href="{{url('/about')}}">about us</a></li>
                                                        <li><a href="{{url('/service')}}">services</a></li>
                                                        <li><a href="{{url('/terms')}}">terms of services</a></li>
                                                        <li><a href="{{url('/contact')}}">contact</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{url('/blog')}}">blog</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-toolbar d-flex align-items-center">
                                @if (Route::has('login'))
                                    @auth

                                        <div class="dropdown">
                                            <ul class="list-items list-items-white">
                                                <li class="d-inline-block mr-2"><a href="#">{{Auth::user()->name}} <i class="fal fa-angle-down font-size-12"></i></a></li>
                                            </ul>
                                            <div class="dropdown-content">
                                                <form method="POST" action="{{ route('logout') }}" class="d-none" id="logoutForm">
                                                    @csrf
                                                </form>

                                                <a href="{{url('profile')}}">Profile</a>
                                                <a href="#" onclick="(function() { document.getElementById('logoutForm').submit(); })()">Logout</a>
                                            </div>
                                        </div>

                                    @else
                                        <ul class="list-items list-items-white">
                                            <li class="d-inline-block mr-2"><a href="{{ route('login') }}">Sign in</a></li>
                                            @if (Route::has('register'))
                                            <li class="d-inline-block"><a href="{{ route('register') }}" class="btn btn-sm btn-light text-black">Get Started</a></li>
                                            @endif
                                        </ul>
                                    @endauth
                                @endif

                                <div class="hamburger hamburger-white">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div><!-- end navbar-toolbar -->
                        </div><!-- end main-navbar -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div><!-- end main-menu-wrapper -->
        </div> <!-- end container -->
    </div><!-- end main-menu-header -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->
