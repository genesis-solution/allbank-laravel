<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Markets') }}
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
            </div>
        </div><!-- end container -->
    </section><!-- end marketprice-area -->
    <!-- ================================
           START MARKETPRICE AREA
    ================================= -->

</x-app-layout>
