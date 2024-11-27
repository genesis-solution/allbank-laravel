<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use GuzzleHttp\Client;


class MainController extends Controller
{
    protected $client;
    protected $add_rate = 0.02;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function goHomePage(Request $request) {

        try {
            // Create a new Guzzle client
            $client = new Client();

            // Make an HTTP GET request to the CoinCap API
            $response = file_get_contents('https://api.coincap.io/v2/assets');

            // Check if the request was successful
            if ($response === false) {
                // Handle error
                echo "Error fetching data from CoinCap API";
                exit;
            }

            // Decode the JSON response
            $data = json_decode($response, true);

            // Check if the response contains data
            if (!isset($data['data'])) {
                // Handle error
                echo "Invalid response from CoinCap API";
                return view('errors.500');
            }

            // Extract asset information from the response
            $assets = $data['data'];

            $cryptoData = [];
            $order_id = 0;

            foreach ($assets as $asset) {
                $order_id++;
                if ($order_id > 3) break;
                $cryptoData[] = [
                    'id' => $order_id,
                    'order_id' => $order_id,
                    'name' => $asset['name'],
                    'price' => $asset['priceUsd'],
                    'change_24h' => $asset['changePercent24Hr'],
                    'icon' => 'images/coins/'.strtolower($asset['symbol']).'.png', // Get image based on symbol
                    'attr' => strtoupper($asset['symbol'])
                ];
            }

            // Pass the cryptocurrency data to the view
            return view('welcome', compact('cryptoData'));
        }
        catch (\Exception $exception) {
            dd($exception);
            return view('errors.500');
        }
    }

    public function getMarkets(Request $request) {

        try {
            // Create a new Guzzle client
            $client = new Client();

            // Make an HTTP GET request to the CoinCap API
            $response = file_get_contents('https://api.coincap.io/v2/assets');

            // Check if the request was successful
            if ($response === false) {
                // Handle error
                echo "Error fetching data from CoinCap API";
                exit;
            }

            // Decode the JSON response
            $data = json_decode($response, true);

            // Check if the response contains data
            if (!isset($data['data'])) {
                // Handle error
                echo "Invalid response from CoinCap API";
                return view('errors.500');
            }

            // Extract asset information from the response
            $assets = $data['data'];

            $cryptoData = [];
            $order_id = 0;

            foreach ($assets as $asset) {
                $order_id++;
                if ($order_id > 5) break;
                $cryptoData[] = [
                    'id' => $order_id,
                    'order_id' => $order_id,
                    'name' => $asset['name'],
                    'price' => $asset['priceUsd'],
                    'change_24h' => $asset['changePercent24Hr'],
                    'icon' => 'images/coins/'.strtolower($asset['symbol']).'.png', // Get image based on symbol
                    'attr' => strtoupper($asset['symbol'])
                ];
            }

            // Pass the cryptocurrency data to the view
            return view('pricing.markets', compact('cryptoData'));
        }
        catch (\Exception $exception) {
            return \view('errors.500');
        }
    }

    public function goPricing(Request $request, $type = 'bitcoin'): View
    {
//        $conversionRate = $this->fetchConversionRate($type, 'usd');

        try {
            $type_data = [
                'type' => $type
            ];

            // Create a new Guzzle client
            $client = new Client();

            // Make an HTTP GET request to the CoinCap API
            $response = file_get_contents('https://api.coincap.io/v2/assets');

            // Check if the request was successful
            if ($response === false) {
                // Handle error
                echo "Error fetching data from CoinCap API";
                exit;
            }

            // Decode the JSON response
            $data = json_decode($response, true);

            // Check if the response contains data
            if (!isset($data['data'])) {
                // Handle error
                echo "Invalid response from CoinCap API";
                return view('errors.500');
            }

            // Extract asset information from the response
            $assets = $data['data'];

            $cryptoData = [];
            $order_id = 0;

            foreach ($assets as $asset) {
                $order_id++;
                if ($order_id > 5) break;
                $cryptoData[] = [
                    'id' => $order_id,
                    'order_id' => $order_id,
                    'name' => $asset['name'],
                    'price' => $asset['priceUsd'],
                    'change_24h' => $asset['changePercent24Hr'],
                    'icon' => 'images/coins/'.strtolower($asset['symbol']).'.png', // Get image based on symbol
                    'attr' => strtoupper($asset['symbol'])
                ];
            }
            return view('pricing.pricing', compact('cryptoData'))->with($type_data);
        }
        catch (\Exception $exception) {
            return view('errors.500');
        }
    }

    public function getConversationRate(Request $request) {
        try {
            $baseCurrency = strtolower($request->input('base_currency', 'bitcoin'));
            $quoteCurrency = $request->input('quote_currency', 'usd');
            $conversionRate = $this->fetchConversionRate($baseCurrency, $quoteCurrency);

            $conversionRate = $conversionRate * (1 + $this->add_rate);
            $conversionRate = floor($conversionRate * 1000 / 1000);
            return response()->json(['conversion_rate' => $conversionRate], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getSellConversationRate(Request $request) {
        try {
            $baseCurrency = strtolower($request->input('base_currency', 'bitcoin'));
            $quoteCurrency = $request->input('quote_currency', 'usd');
            $conversionRate = $this->fetchConversionRate($baseCurrency, $quoteCurrency);

            $conversionRate = $conversionRate * (1 - $this->add_rate);
            $conversionRate = floor($conversionRate * 1000 / 1000);
            return response()->json(['conversion_rate' => $conversionRate], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function postCheckout(Request $request) {
        try {
            $baseCurrency = strtolower($request->input('base_currency', 'bitcoin'));
            $quoteCurrency = $request->input('quote_currency', 'usd');
            $coin_amount = $request->input('coin_amount', 0);
            $deal_type = $request->input('deal_type', '');

            if ($coin_amount <= 0 || $deal_type == '') {
                return response()->json(['success' => false], 200);
            }

            $conversionRate = $this->fetchConversionRate($baseCurrency, $quoteCurrency);

            if ($deal_type == 'sell') {
                $conversionRate = $conversionRate * (1 - $this->add_rate);
            } else {
                $conversionRate = $conversionRate * (1 + $this->add_rate);
            }

            $conversionRate = floor($conversionRate * 1000 / 1000);

            $request->session()->put('baseCurrency', $baseCurrency);
            $request->session()->put('quoteCurrency', $quoteCurrency);
            $request->session()->put('coin_amount', $coin_amount);
            $request->session()->put('deal_type', $deal_type);
            $request->session()->put('conversionRate', $conversionRate);

            return response()->json(['success' => true], 200);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    private function fetchConversionRate($baseCurrency, $quoteCurrency)
    {
        // Make an HTTP GET request to the CoinCap API
        $response = file_get_contents('https://api.coincap.io/v2/assets');

        // Check if the request was successful
        if ($response === false) {
            throw new \Exception('Conversion rate not found');
        }

        // Decode the JSON response
        $data = json_decode($response, true);

        // Check if the response contains data
        if (!isset($data['data'])) {
            throw new \Exception('Conversion rate not found');
        }

        // Extract asset information from the response
        $assets = $data['data'];

        foreach ($assets as $asset) {
            if (strtolower($baseCurrency) == strtolower($asset['name'])) {
                return $asset['priceUsd'];
            }
        }

        return 0;
    }

    public function getCheckout(Request $request)
    {
        $baseCurrency = $request->session()->get('baseCurrency');
        $quoteCurrency = $request->session()->get('quoteCurrency');
        $coin_amount = $request->session()->get('coin_amount');
        $deal_type = $request->session()->get('deal_type');
        $conversionRate = $request->session()->get('conversionRate');

        if ($coin_amount == null || $coin_amount <= 0) {
            return redirect('pricing');
        }
        $data = [
            'baseCurrency' => $baseCurrency,
            'quoteCurrency' => $quoteCurrency,
            'coin_amount' => $coin_amount,
            'deal_type' => $deal_type,
            'conversionRate' => $conversionRate,
        ];

        return view('pricing.checkout')->with($data);
    }
    public function goAbout(Request $request): View
    {
        return view('about.aboutus');
    }

    public function goService(Request $request): View
    {
        return view('about.service');
    }

    public function goTerms(Request $request): View
    {
        return view('about.terms');
    }

    public function goContact(Request $request): View
    {
        return view('about.contact');
    }

    public function goBlog(Request $request): View
    {
        return view('about.blog');
    }
}
