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
        //intanciamos el objeto
            $client = new Client();
            //Se hace un pago Unico y se registo
            $response = $client->request('POST', 'https://api.conekta.io/orders', [
                'body' => '{"customer_info":{"name":"' . $nombre . '","email":"' . $correo . '","phone":"' . $telPrep . '"},"metadata":{"vendedor":"' . $vendedor . '"},"pre_authorize":false,"charges":[{"amount":' . $precio . ',"payment_method":{"type":"card","token_id":"' . $tokencrd . '","monthly_installments":' . $planmsi . '}}],"currency":"MXN","line_items":[{"name":"Riqueza Infinita","quantity":1,"unit_price":' . $precio . '}]}',
                'headers' => [
                    'accept' => 'application/vnd.conekta-v2.1.0+json',
                    'authorization' => 'Bearer key_npo5I4VRjZs78h6Edv6tnMv',//conekta priv
                    'content-type' => 'application/json',
                ],
            ]);
            
        $statusCode = $response->getStatusCode();
        if($statusCode === 200){
            $responseBody = $response->getBody()->getContents();
            $responseData = json_decode($responseBody);
            return response()->json(['responseData' => $responseData], 200);
        }else{
            return response()->json(['error' => 'Hubo un problema al procesar la solicitud'], $statusCode);
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
