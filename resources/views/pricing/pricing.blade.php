<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pricing') }}
        </h2>
    </x-slot>

    <!-- Custom CSS -->
    <style>
        .converter-container {
            padding: 40px;
            /*border-radius: 10px;*/
            /*box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);*/
            background-color: #fff;
            transition: transform 0.3s ease;
        }
        .converter-container:hover {
            transform: translateY(-5px);
        }
        .converter-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .input-group-prepend {
            width: 30%;
        }
        .form-control {
            width: 70%;
        }
        .btn-convert {
            width: 100%;
            font-size: 18px;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            color: #007bff;
        }
    </style>
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
           START PACKAGE AREA
    ================================= -->
    <section class="package-area section--padding text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="generic-table generic--table table-responsive mb-3">
                                <h2 class="sec-title mb-3">Buy {{ucfirst($type)}}</h2>
                                <p class="sec-desc mb-3">Buy {{$type}} with your credit card or cash here! Register to {{ucfirst($type)}} and get your {{$type}} today.</p>

                                <div class="converter-container">
                                    <div class="mb-3 input-group">
                                        <input type="number" class="form-control" id="coinAmount" placeholder="Enter coin amount" min="0.01" value="0.1" step="0.01" onchange="convertToUSD()">
                                        <div class="input-group-prepend input-group-append">
                                            <select class="form-select" id="coinType" onchange="convertToUSD()" style="width: 100%;border: none">
                                                @foreach($cryptoData as $data)
                                                    <option value="{{$data['name']}}" @if(strtolower($data['name']) === strtolower($type)) selected @endif>
                                                        @if(isset($data['icon']))
                                                            <span><img src="{{ $data['icon'] }}" alt="Image" class="{{$data['name']}} icon" /></span>
                                                        @endif
                                                        {{ ucfirst($data['name']) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-auto">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Price</th>
                                            <th><span class="numeral font-weight-bold text-color" id="pay_result"></span></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>


                            </div><!-- end generic-table -->
                            <button class="btn btn-primary w-100" onclick="onDeal('buy')"><i class="fal fa-shopping-cart mr-1 font-size-14"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="generic-table generic--table table-responsive mb-3">
                                <h2 class="sec-title mb-3">Sell {{ucfirst($type)}}</h2>
                                <p class="sec-desc mb-3">Sell easy, fast and secure {{ucfirst($type)}}. The money will be transferred to your PayPal, Stripe or bank account.</p>

                                <div class="converter-container">
                                    <div class="mb-3 input-group">
                                        <input type="number" class="form-control" id="coinAmountForSell" placeholder="Enter coin amount" min="0.01" value="0.1" step="0.01" onchange="convertToUSDForSell()">
                                        <div class="input-group-prepend input-group-append">
                                            <select class="form-select" id="coinTypeForSell" onchange="convertToUSDForSell()" style="width: 100%;border: none">
                                                @foreach($cryptoData as $data)
                                                    <option value="{{$data['name']}}" @if(strtolower($data['name']) === strtolower($type)) selected @endif>
                                                        @if(isset($data['icon']))
                                                            <span><img src="{{ $data['icon'] }}" alt="Image" class="{{$data['name']}} icon" /></span>
                                                        @endif
                                                        {{ ucfirst($data['name']) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-auto">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Paid</th>
                                            <th><span class="numeral font-weight-bold text-color" id="sell_result"></span></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>


                            </div><!-- end generic-table -->
                            <button class="btn btn-primary w-100" onclick="onDeal('sell')"><i class="fal fa-shopping-cart mr-1 font-size-14"></i> Sell Now</button>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- end container -->
    </section><!-- end package-area -->
    <!-- ================================
          START PACKAGE AREA
    ================================= -->

    <!-- Your custom script -->
    <script>
        function convertToUSD() {
            // Get coin amount and type
            $('#pay_result').text('');

            var coinAmount = document.getElementById('coinAmount').value;
            var coinType = document.getElementById('coinType').value;

            console.log("coinType", coinType)

            // Data to be sent in the POST request
            var postData = {
                base_currency: coinType,
                quote_currency: 'usd'
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route("getConversationRate") }}', // Replace 'your.route.name' with the actual route name
                type: 'POST',
                dataType: 'json',
                data: postData,
                success: function(response) {
                    console.log('Success:', response.conversion_rate);
                    // Handle success response here
                    $('#pay_result').text('$' + Math.floor(coinAmount * response.conversion_rate * 1000) / 1000);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Handle error here
                }
            });
        }
        function convertToUSDForSell() {
            // Get coin amount and type
            $('#sell_result').text('');

            var coinAmount = document.getElementById('coinAmountForSell').value;
            var coinType = document.getElementById('coinTypeForSell').value;

            // Data to be sent in the POST request
            var postData = {
                base_currency: coinType,
                quote_currency: 'usd'
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route("getSellConversationRate") }}', // Replace 'your.route.name' with the actual route name
                type: 'POST',
                dataType: 'json',
                data: postData,
                success: function(response) {
                    console.log('Success:', response.conversion_rate);
                    // Handle success response here
                    $('#sell_result').text('$' + Math.floor(coinAmount * response.conversion_rate * 1000) / 1000);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Handle error here
                }
            });
        }

        function onDeal(deal_type) {
            var coinAmount = document.getElementById('coinAmount').value;
            var coinType = document.getElementById('coinType').value;

            if (deal_type == 'sell')
            {
                coinAmount = document.getElementById('coinAmountForSell').value;
                coinType = document.getElementById('coinTypeForSell').value;
            }

            // Data to be sent in the POST request
            var postData = {
                base_currency: coinType,
                coin_amount: coinAmount,
                quote_currency: 'usd',
                deal_type: deal_type
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route("postCheckout") }}', // Replace 'your.route.name' with the actual route name
                type: 'POST',
                dataType: 'json',
                data: postData,
                success: function(response) {
                    if (response.success) {
                        window.open('/checkout', '_blank');
                    } else {
                        if (deal_type == 'sell')
                            $('#sell_result').text('Please input the amount and coin kind correctly.');
                        else
                            $('#pay_result').text('Please input the amount and coin kind correctly.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Handle error here
                }
            });
        }
        document.addEventListener('DOMContentLoaded', function() {
            convertToUSD();
            convertToUSDForSell();
        });

    </script>


</x-app-layout>

