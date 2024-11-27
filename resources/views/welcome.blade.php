<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <!-- ================================
        START HERO AREA
    ================================= -->
    <section class="hero-area hero-area-3 bg-dark">
        <span class="ring-shape ring-shape-white ring-shape-1 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-2 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-3 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-4 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-5 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-6 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-7 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-8 position-absolute"></span>
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="sec-title font-size-50 mb-3 text-white">Buy & Sell Crypto in minutes</h1>
                <p class="sec-desc text-white"><strong style="color: yellow">Allbank1</strong> is the easiest place to buy, sell, and manage your cryptocurrency portfolio</p>

            </div><!-- end hero-content -->
        </div><!-- end container -->
        <svg class="hero-svg hero--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
        </svg>
    </section><!-- end hero-area -->
    <!-- ================================
        END HERO AREA
    ================================= -->

    <!-- ================================
           START MARKETPRICE AREA
    ================================= -->
    <section class="marketprice-area padding-bottom-120px">
        <div class="container">
            <div class="card generic-table table-responsive generic-table-negative">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Change(24Hr)</th>
                        <th scope="col">Trade</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cryptoData as $data)
                        <tr>
                            <th scope="row">{{ $data['order_id'] }}</th>
                            <td class="d-flex align-items-center crypto-name-wrap">
                                <img src="{{ $data['icon'] }}" class="flex-shrink-0 mr-2" alt="{{ $data['name'] }} icon"/>
                                <p class="line-height-18">
                                    {{ $data['name'] }} <span class="d-block font-size-11 text-gray">{{ $data['attr'] }}</span>
                                </p>
                            </td>
                            <td><span class="numeral">${{ $data['price'] }}</span></td>
                            <td><span class="numeral green">{{ $data['change_24h'] }}%</span> </td>
                            <td>
                                <a href="{{url('pricing/'.$data['name'])}}" class="btn btn-sm btn-success">Buy</a>
                                <a href="{{url('pricing/'.$data['name'])}}" class="btn btn-sm btn-warning text-white">Sell</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- end coin-price-table -->
            <div class="text-center">
                <a href="{{url('/markets')}}" class="btn btn-light">View More Markets <i class="fal fa-angle-down ml-1"></i></a>
            </div>
        </div><!-- end container -->
    </section><!-- end marketprice-area -->
    <!-- ================================
           START MARKETPRICE AREA
    ================================= -->

    <!-- ================================
           START CTA AREA
    ================================= -->
    <section class="cta-area padding-bottom-120px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-5 mb-lg-0 pr-lg-5">
                        <h2 class="font-weight-bold mb-3">Earn up to $35 worth
                            <br> of crypto
                        </h2>
                        <p class="mb-4">Discover how specific cryptocurrencies work — and get a bit of each crypto to try out for yourself.</p>
                        <a href="{{url('pricing')}}" class="btn btn-primary">Start Earning</a>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="media-list mb-3">
                        <a href="#" class="card hover-y mb-2">
                            <div class="card-body media align-items-center p-3">
                                <img src="{{asset('images/asset-logo.svg')}}" alt="" class="img-fluid mr-3 flex-shrink-0">
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <span class="mb-1 font-size-18 font-weight-semi-bold text-black">Balancer</span>
                                        <span class="mb-1 font-weight-semi-bold text-black text-uppercase ml-3">bal</span>
                                    </div>
                                    <p class="text-success">Earn $3 BAL</p>
                                </div>
                            </div>
                        </a><!-- end card -->
                        <a href="#" class="card hover-y mb-2">
                            <div class="card-body media align-items-center p-3">
                                <img src="{{asset('images/asset-logo2.svg')}}" alt="" class="img-fluid mr-3 flex-shrink-0">
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <span class="mb-1 font-size-18 font-weight-semi-bold text-black">Clover Finance</span>
                                        <span class="mb-1 font-weight-semi-bold text-black text-uppercase ml-3">clv</span>
                                    </div>
                                    <p class="text-success">Earn $3 CLV</p>
                                </div>
                            </div>
                        </a><!-- end card -->
                        <a href="#" class="card hover-y mb-2">
                            <div class="card-body media align-items-center p-3">
                                <img src="{{asset('images/asset-logo.svg')}}" alt="" class="img-fluid mr-3 flex-shrink-0">
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <span class="mb-1 font-size-18 font-weight-semi-bold text-black">The Graph</span>
                                        <span class="mb-1 font-weight-semi-bold text-black text-uppercase ml-3">grt</span>
                                    </div>
                                    <p class="text-success">Earn $3 GRT</p>
                                </div>
                            </div>
                        </a><!-- end card -->
                        <a href="#" class="card hover-y mb-2">
                            <div class="card-body media align-items-center p-3">
                                <img src="{{asset('images/asset-logo2.svg')}}" alt="" class="img-fluid mr-3 flex-shrink-0">
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <span class="mb-1 font-size-18 font-weight-semi-bold text-black">BarnBridge</span>
                                        <span class="mb-1 font-weight-semi-bold text-black text-uppercase ml-3">bond</span>
                                    </div>
                                    <p class="text-success">Earn $3 BOND</p>
                                </div>
                            </div>
                        </a><!-- end card -->
                    </div><!-- end media-list -->
                    <a href="#" class="btn-link">View more <i class="fal fa-angle-right ml-1"></i></a>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cta-area -->
    <!-- ================================
           START CTA AREA
    ================================= -->

    <hr class="border-top-gray my-0">

    <!-- ================================
           START APP FEATURES AREA
    ================================= -->
    <section class="app-features-area section--padding">
        <div class="container">
            <div class="text-center">
                <h2 class="sec-title mb-3">Create your cryptocurrency portfolio today</h2>
                <p class="sec-desc">Bitcon has a variety of features that make it the best place to start trading</p>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-4">
                    <ul class="media-list app-features-content">
                        <li class="media mb-5">
                            <div class="icon-element mr-3 flex-shrink-0">
                                <svg width="30" height="32" viewBox="0 0 30 32">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#D4EEFF" d="M10 32h10V10H10z"></path>
                                        <path fill="#15b2ec" d="M20 32h10V0H20z"></path>
                                        <path fill="#15b2ec" d="M0 32h10V19H0z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1 font-size-18 font-weight-semi-bold">Manage your portfolio</h5>
                                <p>Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia.</p>
                            </div>
                        </li>
                        <li class="media mb-5">
                            <div class="icon-element mr-3 flex-shrink-0">
                                <svg width="36" height="38" viewBox="0 0 36 38"><g fill="none" fill-rule="evenodd"><path d="M17.813 9.5a2.375 2.375 0 002.375-2.375v-4.75a2.375 2.375 0 00-4.75 0v4.75A2.375 2.375 0 0017.811 9.5M29.688 9.5a2.375 2.375 0 002.375-2.375v-4.75a2.375 2.375 0 00-4.75 0v4.75A2.375 2.375 0 0029.688 9.5" fill="#D4EEFF"></path><path fill="#D4EEFF" d="M0 38h35.625V4.75H0z"></path><path fill="#55B4FC" d="M0 11.875h35.625V4.75H0z"></path><path d="M5.938 9.5a2.375 2.375 0 002.375-2.375v-4.75a2.375 2.375 0 00-4.75 0v4.75A2.375 2.375 0 005.937 9.5" fill="#D4EEFF"></path><path d="M27.313 4.75v2.375a2.375 2.375 0 004.75 0V4.75h-4.75zM5.938 9.5a2.375 2.375 0 002.375-2.375V4.75h-4.75v2.375A2.375 2.375 0 005.937 9.5" fill="#1752F0"></path><path d="M17.813 9.5a2.375 2.375 0 002.375-2.375v-4.75a2.375 2.375 0 00-4.75 0v4.75A2.375 2.375 0 0017.811 9.5" fill="#D4EEFF"></path><path d="M17.813 9.5a2.375 2.375 0 002.375-2.375V4.75h-4.75v2.375A2.375 2.375 0 0017.811 9.5" fill="#1752F0"></path><path fill="#FFF" d="M4.75 34.438h26.125V11.875H4.75z"></path><path fill="#1752F0" d="M12.69 26.329l3.359 3.359L26.125 19.61l-3.358-3.359z"></path><path fill="#1752F0" d="M16.049 29.688l3.359-3.36-6.244-6.243-3.359 3.36z"></path></g></svg>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1 font-size-18 font-weight-semi-bold">Recurring buys</h5>
                                <p>Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia.</p>
                            </div>
                        </li>
                        <li class="media mb-5">
                            <div class="icon-element mr-3 flex-shrink-0">
                                <svg width="30" height="33" viewBox="0 0 30 33" fill="none">
                                    <path d="M15 0C9.106 0 4.284 4.64 4.284 11.344V25.78h21.429V11.344C25.714 4.64 20.892 0 14.999 0z" fill="#D4EEFF"></path>
                                    <path d="M30 12.375H0V33h30V12.375z" fill="#56B4FC"></path>
                                    <path d="M25.714 12.375H4.285v16.5h21.429v-16.5z" fill="#3B5998"></path>
                                    <path d="M15 18.563l2.84 6.187h-5.68L15 18.562z" fill="#fff"></path>
                                    <path d="M15 20.625c1.184 0 2.143-.923 2.143-2.063 0-1.139-.96-2.062-2.143-2.062-1.183 0-2.143.923-2.143 2.063 0 1.139.96 2.062 2.143 2.062z" fill="#fff"></path>
                                </svg>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1 font-size-18 font-weight-semi-bold">Vault protection</h5>
                                <p>Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia.</p>
                            </div>
                        </li>
                        <li class="media mb-5">
                            <div class="icon-element mr-3 flex-shrink-0">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M36 2.25H0v31.5h36V2.25z" fill="#D4EEFF"></path>
                                    <path d="M28.125 36H7.875a1.128 1.128 0 01-1.125-1.125V1.125C6.75.506 7.256 0 7.875 0h20.25c.618 0 1.125.506 1.125 1.125v33.75c0 .619-.507 1.125-1.125 1.125z" fill="#56B4FC"></path>
                                    <path d="M29.25 2.25H6.75v31.5h22.5V2.25z" fill="#3B5998"></path>
                                    <path d="M23 15.137L21.889 14l-6.667 6.822 1.11 1.137L23 15.137z" fill="#fff"></path>
                                    <path d="M16.334 22l1.11-1.137-3.333-3.411-1.11 1.137L16.333 22z" fill="#fff"></path>
                                    <path d="M23.625 3.375h-11.25a1.128 1.128 0 01-1.124-1.125V1.125h13.5V2.25c0 .619-.507 1.125-1.126 1.125z" fill="#56B4FC"></path>
                                    <path d="M15.75 32.063c0 .337.226.562.563.562h3.375c.338 0 .563-.225.563-.562 0-.338-.226-.563-.563-.563h-3.375c-.337 0-.562.225-.562.563z" fill="#fff"></path>
                                </svg>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1 font-size-18 font-weight-semi-bold">Mobile apps</h5>
                                <p>Stay on top of the markets with the Bitcon app for <a href="#" class="btn-link text-color">Android</a> or <a href="#" class="btn-link text-color">IOS</a>.</p>
                            </div>
                        </li>
                    </ul>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="img-box">
                        <img src="images/app-img.jpg" alt="app image" class="img__item">
                    </div><!-- end img-box -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end app-features-area -->
    <!-- ================================
           START APP FEATURES AREA
    ================================= -->

    <hr class="border-top-gray my-0">

    <!-- ================================
           START FEATURE AREA
    ================================= -->
    <section class="feature-area section--padding">
        <div class="container">
            <div class="text-center">
                <h2 class="sec-title mb-3">The most trusted cryptocurrency platform</h2>
                <p class="sec-desc">Here are a few reasons why you should choose Bitcon</p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <div class="card-body position-relative">
                            <div class="icon-element text-color fancy-radius">
                                <i class="fal fa-user-lock"></i>
                            </div>
                            <h4 class="card-title mt-4">Secure storage</h4>
                            <p class="card-desc mb-3">Sit amet, consectetur cqui adipiscing elit, Quisque.</p>
                            <a href="#" class="btn-link">Learn how Bitcon keeps your funds safe and secure <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <div class="card-body position-relative">
                            <div class="icon-element text-color fancy-radius">
                                <i class="fal fa-piggy-bank"></i>
                            </div>
                            <h4 class="card-title mt-4">Protected by insurance</h4>
                            <p class="card-desc mb-3">Sit amet, consectetur cqui adipiscing elit, Quisque.</p>
                            <a href="#" class="btn-link">Learn how your crypto is covered by our insurance policy <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <div class="card-body position-relative">
                            <div class="icon-element text-color fancy-radius">
                                <i class="fal fa-user-check"></i>
                            </div>
                            <h4 class="card-title mt-4">Industry best practices</h4>
                            <p class="card-desc mb-3">Sit amet, consectetur cqui adipiscing elit, Quisque.</p>
                            <a href="#" class="btn-link">Learn how we implement industry best practices for account security <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end feature-area -->
    <!-- ================================
           START FEATURE AREA
    ================================= -->

    <!-- ================================
           START HOW-IT-WORKS AREA
    ================================= -->
    <section class="how-it-works-area section--padding">
        <div class="container">
            <div class="text-center">
                <h2 class="sec-title mb-3">Get started in a few minutes</h2>
                <p class="sec-desc">Bitcon supports a variety of the most popular digital currencies</p>
            </div>
            <div class="row padding-top-60px">
                <div class="col-lg-4 col-md-6">
                    <div class="info-box text-center">
                        <div class="dashed-shape"><img src="images/dashed-line.png" alt="dashed line image"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60">
                            <path d="M312,392h48v48a8,8,0,0,0,16,0V392h48a8,8,0,0,0,0-16H376V328a8,8,0,0,0-16,0v48H312a8,8,0,0,0,0,16Z"></path><path d="M36.169,415.023C39.835,417.023,126.983,464,216,464a332.248,332.248,0,0,0,67.025-7.122A111.978,111.978,0,1,0,368,272c-2.142,0-4.268.066-6.38.186-25.414-38.012-61.228-63.9-102.114-74.624a96,96,0,1,0-86.978.017c-33.16,8.7-63.155,27.408-87.009,54.772C51.007,291.941,32,347.218,32,408A8,8,0,0,0,36.169,415.023ZM368,288a96,96,0,1,1-96,96A96.108,96.108,0,0,1,368,288ZM136,112a80,80,0,1,1,80,80A80.091,80.091,0,0,1,136,112ZM97.58,262.865C128.422,227.485,170.478,208,216,208c50.71,0,96.7,24.14,127.817,66.637A111.947,111.947,0,0,0,272.6,442.613,312.1,312.1,0,0,1,216,448c-74.188,0-149.593-35.583-167.958-44.844C49.013,348.164,66.517,298.5,97.58,262.865Z"></path>
                        </svg>
                        <h5 class="font-weight-semi-bold mt-4">Create an account</h5>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-box text-center">
                        <div class="dashed-shape"><img src="images/dashed-line-2.png" alt="dashed line image"></div>
                        <svg width="60" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 480.032 480.032" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M240.032,288.017c-8.837,0-16-7.163-16-16s7.163-16,16-16s16,7.163,16,16h16c-0.055-14.547-9.914-27.227-24-30.864v-9.136
                                        h-16v9.136c-17.081,4.396-27.364,21.807-22.968,38.888c3.636,14.126,16.381,23.994,30.968,23.976c8.837,0,16,7.163,16,16
                                        s-7.163,16-16,16s-16-7.163-16-16h-16c0.055,14.547,9.915,27.227,24,30.864v9.136h16v-9.136
                                        c17.081-4.396,27.364-21.807,22.968-38.888C267.364,297.866,254.619,287.999,240.032,288.017z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M240.032,192.017c-57.438,0-104,46.562-104,104s46.562,104,104,104s104-46.562,104-104
                                        C343.966,238.607,297.442,192.083,240.032,192.017z M240.032,384.017c-48.601,0-88-39.399-88-88c0-48.601,39.399-88,88-88
                                        s88,39.399,88,88C327.975,344.594,288.609,383.96,240.032,384.017z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M472.032,176.017c4.418,0,8-3.582,8-8v-32c0-0.104-0.056-0.184-0.056-0.288c-0.031-0.874-0.206-1.736-0.52-2.552
                                        c0-0.096,0-0.208-0.072-0.304c-0.389-0.873-0.93-1.67-1.6-2.352c-0.237-0.21-0.486-0.408-0.744-0.592
                                        c-0.358-0.339-0.746-0.644-1.16-0.912l-232-128c-2.403-1.336-5.325-1.336-7.728,0l-232,128c-0.414,0.268-0.802,0.573-1.16,0.912
                                        c-0.258,0.184-0.507,0.382-0.744,0.592c-0.67,0.682-1.211,1.479-1.6,2.352c0,0.096,0,0.208-0.072,0.304
                                        c-0.314,0.816-0.489,1.678-0.52,2.552c0,0.104-0.056,0.184-0.056,0.288v32c0,4.418,3.582,8,8,8h24.032v240h-24
                                        c-4.418,0-8,3.582-8,8v48c0,4.418,3.582,8,8,8h464c4.418,0,8-3.582,8-8v-48c0-4.418-3.582-8-8-8h-24v-240H472.032z
                                         M240.032,17.153l200.936,110.864H39.096L240.032,17.153z M464.032,432.017v32h-448v-32H464.032z M48.032,416.017v-240h32v240
                                        H48.032z M96.032,416.017v-240h288v240H96.032z M400.032,416.017v-240h32v240H400.032z M16.032,160.017v-16h448v16H16.032z"></path>
                                </g>
                            </g>
                    </svg>
                        <h5 class="font-weight-semi-bold mt-4">Link your bank account</h5>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-box text-center">
                        <svg viewBox="0 0 511 511.99978" xmlns="http://www.w3.org/2000/svg" width="60">
                            <path d="m235.792969 347.265625c3.902343-3.910156 3.902343-10.238281 0-14.148437-3.90625-3.898438-10.234375-3.898438-14.144531 0-3.898438 3.910156-3.898438 10.238281 0 14.148437 3.910156 3.898437 10.238281 3.898437 14.144531 0zm0 0"></path><path d="m188.449219 109.96875c0 60.636719 49.332031 109.972656 109.96875 109.972656s109.96875-49.335937 109.96875-109.972656-49.332031-109.96875-109.96875-109.96875-109.96875 49.332031-109.96875 109.96875zm199.945312 0c0 49.613281-40.363281 89.976562-89.976562 89.976562s-89.976563-40.363281-89.976563-89.976562c0-49.609375 40.363282-89.972656 89.976563-89.972656s89.976562 40.363281 89.976562 89.972656zm0 0"></path><path d="m115.652344 509.042969c3.875 3.90625 10.183594 3.949219 14.109375.082031l48.46875-47.75c8.234375-8.234375 10.738281-20.425781 7.117187-31.023438l10.425782-10.054687c5.613281-5.421875 13.003906-8.410156 20.816406-8.410156h132.902344c23.578124 0 45.863281-9.054688 62.757812-25.496094.695312-.675781-5.277344 6.359375 90.667969-108.3125 14.230469-16.835937 12.101562-42.117187-4.75-56.363281-16.746094-14.113282-41.832031-12.085938-56.101563 4.460937l-58.992187 60.632813c-7.449219-9.167969-18.808594-14.882813-31.082031-14.882813h-111.480469c-15.863281-6.636719-32.695313-9.996093-50.0625-9.996093-48.140625 0-90.175781 22.234374-112.734375 63.921874-9.503906-1.800781-19.527344 1.074219-26.738282 8.285157l-47.558593 47.699219c-3.882813 3.894531-3.890625 10.195312-.015625 14.101562zm74.792968-227.121094c15.3125 0 30.117188 3.082031 44.011719 9.160156 1.265625.554688 2.628907.839844 4.007813.839844h113.527344c10.839843 0 19.996093 8.839844 19.996093 19.992187 0 11.027344-8.96875 19.996094-19.996093 19.996094h-81.566407c-5.519531 0-9.996093 4.476563-9.996093 9.996094 0 5.523438 4.476562 9.996094 9.996093 9.996094h81.566407c22.050781 0 39.988281-17.9375 39.988281-39.988282 0-1.757812-.125-3.5-.351563-5.226562 57.066406-58.660156 65.113282-66.902344 65.457032-67.3125 7.125-8.410156 19.773437-9.476562 28.1875-2.382812 8.421874 7.121093 9.488281 19.761718 2.34375 28.21875l-89.667969 107.195312c-13.09375 12.570312-30.285157 19.488281-48.457031 19.488281h-132.902344c-13.023438 0-25.351563 4.980469-34.703125 14.015625l-8.496094 8.199219-78.320313-78.316406c18.304688-34.339844 52.652344-53.871094 95.375-53.871094zm-125.320312 66.34375c3.296875-3.296875 8.359375-3.890625 12.378906-1.40625 1.730469 1.054687-3.238281-3.46875 86.589844 86.234375 3.996094 3.996094 3.78125 10.363281.054688 14.089844l-41.320313 40.707031-98.230469-98.980469zm0 0"></path><path d="m286.421875 49.988281v11.714844c-11.636719 4.125-19.996094 15.238281-19.996094 28.273437 0 16.535157 13.453125 29.992188 29.992188 29.992188 5.511719 0 9.996093 4.484375 9.996093 9.996094 0 5.511718-4.484374 9.996094-9.996093 9.996094-4.269531 0-8.882813-2.683594-12.980469-7.5625-3.554688-4.226563-9.859375-4.769532-14.085938-1.21875-4.226562 3.554687-4.773437 9.859374-1.21875 14.085937 5.34375 6.355469 11.628907 10.785156 18.289063 13.019531v11.667969c0 5.523437 4.476563 9.996094 9.996094 9.996094s9.996093-4.472657 9.996093-9.996094v-11.714844c11.636719-4.128906 19.996094-15.242187 19.996094-28.273437 0-16.539063-13.453125-29.992188-29.992187-29.992188-5.511719 0-9.996094-4.484375-9.996094-9.996094 0-5.511718 4.484375-10 9.996094-10 3.542969 0 7.28125 1.808594 10.8125 5.226563 3.96875 3.839844 10.296875 3.734375 14.136719-.230469 3.839843-3.96875 3.734374-10.296875-.230469-14.136718-5.074219-4.910157-10.152344-7.6875-14.722657-9.203126v-11.644531c0-5.523437-4.476562-10-9.996093-10s-9.996094 4.476563-9.996094 10zm0 0"></path>
                        </svg>
                        <h5 class="font-weight-semi-bold mt-4">Start buying & selling</h5>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end how-it-works-area -->
    <!-- ================================
           START HOW-IT-WORKS AREA
    ================================= -->

    <!-- ================================
           START CTA AREA
    ================================= -->
    @guest
        <section class="cta-area section-padding text-center bg-gray">
            <div class="container">
                <h2 class="sec-title mb-3">Get Started Today With Bitcoin</h2>
                <p class="sec-desc mb-4">Open account for free and start trading Bitcoin!</p>
                <a href="{{ route('register') }}" class="btn btn-primary">Register Now <i class="fal fa-angle-right ml-1"></i></a>
            </div><!-- end container -->
        </section><!-- end cta-area -->
    @endguest

    <!-- ================================
           START CTA AREA
    ================================= -->


</x-app-layout>
