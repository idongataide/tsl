<?php

class about extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'About Us';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/stories',
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
        
        $data['stories'] = $decodedResponse['data'] ?? [];
        $data['menu_active'] = 'about';
        $this->loadView('about-us', @$data);
    }

    public function leadership()
    {
        $data['menu_active'] = 'about';
        $data['page_title'] = 'Leadership';
        
        // Fetch leaders from API
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/leaders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        // Store all leaders for the leadership page
        $data['leaders'] = $decodedResponse['data'] ?? [];
        
        $this->loadView('leadership', @$data);
    }

        
    public function leaderships($id)
    {
        $data['menu_active'] = 'about';
        $data['page_title'] = 'Leadership Details';
        
        // Fetch single leader from API by ID
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/leaders/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        // Get the single leader data
        $data['lead'] = $decodedResponse['data'] ?? null;
        $this->loadView('details', @$data);
    }

    public function videos()
   {
        $data['page_title'] = 'Videos';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/videos',
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
        
        $data['videos'] = $decodedResponse['data'] ?? [];
        $this->loadView('videos', @$data);
    }

    public function gallery()
    {
        $data['page_title'] = 'Gallery';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/images',
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
        
        $data['gallery'] = $decodedResponse['data'] ?? [];
        $this->loadView('gallery', @$data);
    }

}
