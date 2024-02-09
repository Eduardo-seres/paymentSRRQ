<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
// use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function createOrder(Request $request)
    {
        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $telefono = $request->input('telefono');   
        $telPrep = str_replace(' ', '', $telefono);
        $tokencrd = $request->input('tokencrd');
        $vendedor = $request->input('vendedor');
        $precio = $request->input('precio');
        $planmsi = $request->input('planmsi'); 
        $curl = curl_init();
    
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.conekta.io/orders",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode([
            'customer_info' => [
                'name' =>  $nombre,
                'email' => $correo,
                'phone' => $telPrep
            ],
            'metadata' => [
                'vendedor' => $vendedor,
                'generacion' => 'generacion 40'
            ],
            'pre_authorize' => false,
            'currency' => 'MXN',
            'line_items' => [
                [
                        'name' => 'Riqueza Infinita',
                        'quantity' => 1,
                        'unit_price' => $precio
                ]
            ],
            'charges' => [
                [
                        'payment_method' => [
                                        'type' => 'card',
                                        'token_id' => $tokencrd,
                                        'monthly_installments' => $planmsi
                        ],
                        'amount' => $precio
                ]
            ]
          ]),
          CURLOPT_HTTPHEADER => [
            "Accept-Language: es",
            "accept: application/vnd.conekta-v2.1.0+json",
            "authorization: Bearer key_npo5I4VRjZs78h6Edv6tnMv", //PROD: key_7JWkHW1gL2BaSIMQ8nYv4xN
            "content-type: application/json"
          ],
        ]);
        
        $response = curl_exec($curl);
        $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);     
        curl_close($curl);
        
        if ($httpStatus == 200) {
            return response()->json(['responseData' => $response], 200);
        } else {
            return response()->json(['error' => 'Error en la solicitud. Código de estado HTTP: ' . $httpStatus], $httpStatus);
        }

    }

   
    

    //REGISTRAMOS CLIENTE Y LUEGO SE PAGA

    // public function createCustomer(Request $request)
    // {
    //     $nombre = $request->input('nombre');
    //     $correo = $request->input('correo');
    //     $telefono = $request->input('telefono');   
    //     $telPrep = str_replace(' ', '', $telefono);
    //     $tokencrd = $request->input('tokencrd');   
    //     //intanciamos el objeto
    //     $client = new Client();
    //     //registramos el usuario en conketa y este efectura el pago
    //     $response = $client->request('POST', 'https://api.conekta.io/customers', [
    //         'body' => '{"corporate":false,"email":"'.$correo.'","name":"'.$nombre.'","phone":"'.$telPrep.'"}',
    //         'headers' => [
    //             'Accept-Language' => 'es',
    //             'accept' => 'application/vnd.conekta-v2.1.0+json',
    //             'authorization' => 'Bearer key_npo5I4VRjZs78h6Edv6tnMv',
    //             'content-type' => 'application/json',
    //         ],
    //     ]);
    //     $responseBody = $response->getBody()->getContents();
        
    //     $responseData = json_decode($responseBody);
    //     $customerId = $responseData->id;

    //     //Mandar a pagar
    //     $this->chargerPaid( $tokencrd,$customerId);  
    // }

    // public function chargerPaid ($tokencrd=NULL,$customerId= NULL ){

    //     $token_id = $tokencrd;
    //     $customer_id  = $customerId; //id del user registrado
        
    //     $client = new \GuzzleHttp\Client();

    //     $response = $client->request('POST', 'https://api.conekta.io/orders', [
    //         'body' => '{"customer_info":{"customer_id":"' . $customer_id . '"},"pre_authorize":false,"charges":[{"amount":40000,"payment_method":{"type":"card","token_id":"' . $token_id . '"}}],"currency":"MXN","line_items":[{"name":"Riqueza Infinita","quantity":1,"unit_price":40000}]}',
    //         'headers' => [
    //             'accept' => 'application/vnd.conekta-v2.1.0+json',
    //             'authorization' => 'Bearer key_npo5I4VRjZs78h6Edv6tnMv',
    //             'content-type' => 'application/json',
    //         ],
    //     ]);

    //     return $response->getBody();
    // }
}
