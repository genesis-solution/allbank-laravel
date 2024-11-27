<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;


class PayPalController extends Controller
{
    private $apiContext;
    public function __construct()
    {
        $mode = config('paypal.mode');
        $clientId = config('paypal.' . $mode . '.client_id');
        $secret = config('paypal.' . $mode . '.secret');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential( $clientId,  $secret  ) );
        // Set the PayPal mode
        $this->apiContext->setConfig([
            config('paypal.settings')
        ]);
    }

    public function payment(Request $request)
    {
        $baseCurrency = $request->session()->get('baseCurrency');
        $quoteCurrency = $request->session()->get('quoteCurrency');
        $coin_amount = $request->session()->get('coin_amount');
        $deal_type = $request->session()->get('deal_type');
        $conversionRate = $request->session()->get('conversionRate');

        if ($coin_amount == null || $coin_amount <= 0) {
            return redirect('pricing');
        }

        if ($deal_type == 'buy')
        {
            $sum = $coin_amount * $conversionRate;

            $payer = new Payer();
            $payer->setPaymentMethod("paypal");
            // dd($payer);
            // Set redirect URLs
            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl(route('paypal.success'))
                ->setCancelUrl(route('paypal.cancel'));
//        dd($redirectUrls);
            // Set payment amount
            $amount = new Amount();
            $amount->setCurrency("USD")
                ->setTotal($sum);


            // Set transaction object
            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setDescription(ucfirst($deal_type).' '.$coin_amount.$baseCurrency.' in Allbank1.com');
//           dd($transaction);
            // Create the full payment object
            $payment = new Payment();
            $payment->setIntent('sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));
            // dd($payment);
            // Create payment with valid API context
            try {
                $payment->create($this->apiContext);
                // dd($payment);
                // Get PayPal redirect URL and redirect the customer
                // $approvalUrl =
                return redirect($payment->getApprovalLink());
                // dd($approvalUrl);
                // Redirect the customer to $approvalUrl
            } catch (PayPalConnectionException $ex) {
                echo $ex->getCode();
                echo $ex->getData();
                die($ex);
            } catch (Exception $ex) {
                die($ex);
            }
        }
        else // sell
        {
            // Validate request data
//            $validatedData = $request->validate([
//                'recipient_address' => 'required|string',
//                'amount' => 'required|numeric|min:0',
//            ]);

            // Prepare request payload
            $payload = [
                'recipient_address' => '', // $validatedData['recipient_address'],
                'amount' => $coin_amount * $conversionRate // $validatedData['amount'],
                // Add other required parameters like API key, etc.
            ];

            try {
                // Send request to Bitcoin API
                $response = Http::withOptions([
                    'verify' => true, // Verify SSL certificate
                    'curl' => [CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2] // Specify TLS version
                ])->post('https://api.bitcoinprovider.com/send', $payload);

                // Check if request was successful
                if ($response->successful()) {
                    // Transaction successful, handle response
                    $responseData = $response->json();
                    return response()->json(['success' => true, 'txid' => $responseData['txid']]);
                } else {
                    // Transaction failed, handle error
                    return response()->json(['success' => false, 'error' => 'Transaction failed'], $response->status());
                }
            } catch (\Exception $e) {
                // Handle any exceptions (e.g., network errors)
                return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
            }
        }
    }



// this is success route
    public function success(Request $request)
    {
        // Get payment object by passing paymentId
        $paymentId = $_GET['paymentId'];

        if ($paymentId == null || $paymentId == '') {
            return redirect('/pricing');
        }

        $payment = Payment::get($paymentId, $this->apiContext);
        $payerId = $_GET['PayerID'];

        // Execute payment with payer ID
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
            dd('success');
        } catch (PayPalConnectionException $ex) {
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        } catch (Exception $ex) {
            die($ex);
        }
    }

// this is cancel route
    public function cancel()
    {
        dd('payment cancel');
    }
}

