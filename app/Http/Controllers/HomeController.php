<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $url_bank_code =  "https://api.paystack.co/bank";
    private $secret_key = "Bearer sk_test_27148acf9133fec7a5651222062a59f6aac639e2";
     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

protected function processBank(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $this->url_bank_code,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: $this->secret_key",
            "Cache-Control: no-cache",
        ),
    ));
    $response = json_decode(curl_exec($curl),true);
    $err = curl_error($curl);
    return ($response);
    curl_close($curl);
}



}
