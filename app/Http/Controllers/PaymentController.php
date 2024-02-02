<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function createOrder()
    {
        $client = new Client();

        try {
            $response = $client->request('POST', 'https://api.conekta.io/tokens', [
                'body' => json_encode([
                    'card' => [
                        'cvc' => '256',
                        'exp_month' => '12',
                        'exp_year' => '26',
                        'name' => 'Miguel',
                        'number' => '4213166137551234'
                    ],
                ]),
                'headers' => [
                    'Accept-Language' => 'es',
                    'accept' => 'application/vnd.conekta-v2.1.0+json',
                    'authorization' => 'Bearer key_EM2HefqTPetMnhD9r4F3Rzr',
                    'content-type' => 'application/json',
                ],
            ]);

            return $response->getBody();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
