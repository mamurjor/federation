<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class EasyPaisaController extends Controller
{
    public function initiatePayment(Request $request)
    {
        $client = new Client();
        $response = $client->post(env('EASYPAY_BASE_URL') . '/initiate', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('EASYPAY_API_KEY'),
            ],
            'json' => [
                'amount' => $request->amount,
                'email' => $request->email,
                // Add other required parameters here
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Save the transaction details to the database if necessary

        return response()->json($data);
    }

    public function verifyPayment(Request $request)
    {
        $client = new Client();
        $response = $client->post(env('EASYPAY_BASE_URL') . '/verify', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('EASYPAY_API_KEY'),
            ],
            'json' => [
                'transaction_id' => $request->transaction_id,
                // Add other required parameters here
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Update the transaction status in the database if necessary

        return response()->json($data);
    }
}
