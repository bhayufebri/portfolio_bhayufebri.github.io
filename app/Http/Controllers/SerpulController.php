<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class SerpulController extends Controller
{
    public function index()
    {
        // $data['class'] = Classe::where('is_active', 1)->get();
        // return json_encode($data['class']);
        // $data['document'] = Document::where('folder_id', null)->get();
        // return View::make('organization', $data);

        $url = env('SERPUL_URL');
        $auth = env('SERPUL_AUTH');
        
        // return json_encode($username);

        $client = new \GuzzleHttp\Client();
        // $url = env('URL_SISTER')."Login"; 
        $response = $client->request('GET', $url.'/prabayar/category', [
            'headers' => [
                'Accept'     => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization'      =>  $auth
            ]
                    ]);


                    $responsex =  $response->getBody()->getContents();
                    $responsede = json_decode($responsex);
                    // return json_encode($responsede);
                    if($responsede->responseCode == 200){
                        $data['category'] = $responsede->responseData;
                        
                        // $this->feeder_all('GetSemester', 'par');
                        // return json_encode('success');
                    }
                    // return json_encode('failed');


        return View::make('serpul', $data);
    
    }

    public function operator(Request $request)
    {
        // $data['class'] = Classe::where('is_active', 1)->get();
        // return json_encode($data['class']);
        // $data['document'] = Document::where('folder_id', null)->get();
        // return View::make('organization', $data);

        $url = env('SERPUL_URL');
        $auth = env('SERPUL_AUTH');
        $operator = $request->operator;

        
        // return json_encode($username);

        $client = new \GuzzleHttp\Client();
        // $url = env('URL_SISTER')."Login"; 
        $response = $client->request('GET', $url.'/prabayar/operator?product_id='.$operator, [
            'headers' => [
                'Accept'     => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization'      =>  $auth
            ]
                    ]);


                    $responsex =  $response->getBody()->getContents();
                    $responsede = json_decode($responsex);
                    return json_encode($responsede);
        //             if($responsede->responseCode == 200){
        //                 $data['category'] = $responsede->responseData;
                        
        //                 // $this->feeder_all('GetSemester', 'par');
        //                 // return json_encode('success');
        //             }
        //             // return json_encode('failed');


        // return View::make('serpul', $data);
    
    }

    public function product(Request $request)
    {


        $url = env('SERPUL_URL');
        $auth = env('SERPUL_AUTH');
        $product = $request->product;

        
        // return json_encode($username);

        $client = new \GuzzleHttp\Client();
        // $url = env('URL_SISTER')."Login"; 
        $response = $client->request('GET', $url.'/prabayar/product?product_id='.$product, [
            'headers' => [
                'Accept'     => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization'      =>  $auth
            ]
                    ]);


                    $responsex =  $response->getBody()->getContents();
                    $responsede = json_decode($responsex);
                    return json_encode($responsede);
 
    
    }
}