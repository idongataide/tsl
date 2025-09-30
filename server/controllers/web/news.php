<?php

class news extends ServerController
{
    public function __construct()
    {
    }

    public function index() {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://tlsapi.ufainiibom.com/api/news',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json',
            // 'Cache-Control: no-cache',
        ],

        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
    ]);

    $response = curl_exec($curl);
      
    curl_close($curl);
    $decodedResponse = json_decode($response, true);
    
    $data['news'] = $decodedResponse['data'] ?? [];
    $data['menu_active'] = 'news'; 
    $this->loadView('news', @$data);
        
  }

    public function news_details($id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tlsapi.ufainiibom.com/api/news/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                // 'Cache-Control: no-cache',
            ],
    
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
    
        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        $data['news'] = $decodedResponse['data'] ?? [];
        $data['menu_active'] = 'news'; 
        $this->loadView('news_details', @$data);
        
    }

}
