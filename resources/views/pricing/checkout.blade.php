<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Checkout') }}
        </h2>
    </x-slot>

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div><!-- end overlay -->
        <div class="container">
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <style>
        /* Define the animation */
        @keyframes blink {
            0% { border-color: black; }
            50% { border-color: transparent; }
            100% { border-color: black; }
        }

        /* Apply the animation to the input element */
        input.blinking-border {
            animation: blink 1s infinite;
            border: 2px solid black; /* Initial border style */
        }
    </style>

    <!-- ================================
    START CHECKOUT AREA
================================= -->
    <section class="checkout-area section--padding">
        <div class="container">
            <form action="{{ route('send.money') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Billing Details</h4>
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control form--control" placeholder="First name">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control form--control" placeholder="Last name">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control form--control" placeholder="Company">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 form-group">
                                <input type="email" class="form-control form--control" placeholder="Email address">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control form--control" placeholder="Phone number">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 form-group">
                                <select class="select-picker" data-width="100%" data-size="5" data-live-search="true">
                                    <option value="0" selected="">Select a Country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-12 form-group">
                                <input type="text" class="form-control form--control" placeholder="Street address">
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control form--control" placeholder="Apartment,suite,unit etc (Optional)">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control form--control" placeholder="Town/City">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control form--control" placeholder="Post code">
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="createAnAccount">
                                    <label class="custom-control-label cursor-pointer" for="createAnAccount">Create an account?</label>
                                </div>
                            </div><!-- end col-lg-12 -->

                            @if($deal_type == 'buy')
                            <div class="col-lg-12 form-group">
                                <input type="text" class="form-control form--control blinking-border" placeholder="Your coin address" required>
                            </div><!-- end col-lg-4 -->
                            @endif
                        </div><!-- end row -->
                    </div>
                </div><!-- end card -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card generic-table generic--table table-responsive">
                            <h4 class="card-title px-4 pt-4 mb-4">Your Order</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <p>{{$coin_amount}} {{strtoupper($baseCurrency)}}</p>
                                    </th>
                                    <td><span class="numeral">${{$coin_amount * $conversionRate}}</span></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td class="bg-gray font-size-16">Total:</td>
                                    <td><span class="numeral">${{$coin_amount * $conversionRate}}</span></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- end generic-table -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        @if($deal_type == 'buy')
                            <div class="card">
                            <div class="card-body">
                                <div class="payment-item border-bottom border-bottom-gray pb-4 mb-4 d-none">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="chequePayment" name="radio-stacked">
                                        <label class="custom-control-label cursor-pointer" for="chequePayment">Cheque Payment</label>
                                    </div>
                                    <p class="pt-1 font-size-15 font-weight-normal">Please send us your cheque by Post to: 123 Disney Street Slim Av. Brooklyn Bridge, NY, New York PO BOX 152</p>
                                </div><!-- end payment-item -->
                                <div class="payment-item">
                                    <div class="custom-control custom-radio d-inline-block mr-1">
                                        <input type="radio" class="custom-control-input" id="paypalPayment" name="radio-stacked" checked>
                                        <label class="custom-control-label cursor-pointer" for="paypalPayment">PayPal</label>
                                    </div>
                                    <span class="text-color" data-toggle="tooltip" data-placement="top" title="PayPal is a service that enables you to pay, send money, and accept payments. Register your credit card or debit card with your PayPal account. You can pay by simply choosing PayPal at checkout">What is PayPal?</span>
                                </div><!-- end payment-item -->
                                <div class="payment-images pt-2 pb-5">
                                    <img class="mr-2 border border-gray" src="{{asset('images/american-express.png')}}" alt="american-express">
                                    <img class="mr-2 border border-gray" src="{{asset('images/mastercard.png')}}" alt="mastercard">
                                    <img class="mr-2 border border-gray" src="{{asset('images/visa.png')}}" alt="visa">
                                    <img class="mr-2 border border-gray" src="{{asset('images/paypal.png')}}" alt="paypal">
                                    <img class="border border-gray" src="{{asset('images/maestro.png')}}" alt="maestro">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Place Order</button>
                            </div>
                        </div><!-- end card-->
                        @else
                            <div class="card">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary w-100">Sell {{$baseCurrency}}</button>
                                </div>
                            </div><!-- end card-->
                        @endif
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </form>
        </div><!-- end container -->
    </section><!-- end checkout-area -->
    <!-- ================================
        END CHECKOUT AREA
    ================================= -->



</x-app-layout>

