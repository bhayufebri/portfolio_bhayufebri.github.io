<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class PaymentController extends Controller
{

    public function index()
    {
        // $data['class'] = Classe::where('is_active', 1)->get();
        // return json_encode($data['class']);
        // $data['document'] = Document::where('folder_id', null)->get();
        // return View::make('organization', $data);
        return View::make('home');
    
    }
    

    public function pay(Request $request){

        $startDate = time();
        $tgl = date('Y-m-d H:i:s', strtotime('+1 day', $startDate));

        // return json_encode($tgl);

        $harga = $request->harga;
        $url = env('OY_URL');
        $username = env('OY_USERNAME');
        $key = env('OY_KEY');
        // return json_encode($username);

        $client = new \GuzzleHttp\Client();
        // $url = env('URL_SISTER')."Login"; 
        $response = $client->request('POST', $url.'/api/payment-checkout/create-v2', [
            'headers' => [
                'Accept'     => 'application/json',
                'Content-Type' => 'application/json',
                'x-oy-username'      =>  $username,
                'x-api-key'      =>  $key
            ],
            'json' => [
                    "description"=> "Prod Test API",
                    "partner_tx_id"=> "",
                    "notes"=> "",
                    "sender_name" => "Mochamad Suryono", 
                    "amount" => $harga,
                    "email"=> "yono@oyindonesia.com",
                    "phone_number"=> "085712163208", 
                    "is_open" => true,
                    "step"=> "input-amount",
                    "include_admin_fee" => true,
                    "list_disabled_payment_methods"=> "",
                    "list_enabled_banks"=> "002, 008, 009, 013, 022",
                    "list_enabled_ewallet"=> "shopeepay_ewallet",
                    "expiration"=> $tgl


                    ]
                    ]);


                    $responsex =  $response->getBody()->getContents();
                    $responsede = json_decode($responsex);
                    return json_encode($responsede);
                    if($responsede->error_code == 0){
                        $request->session()->put('feeder',true);
                        $request->session()->put('token', $responsede->data->token);
                        
                        // $this->feeder_all('GetSemester', 'par');
                        return json_encode('success');
                    }
                    return json_encode('failed');

                    
                    // return($responsede);
    }
}