<?php

class careers extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = '';
        $data['menu_active'] = 'careers';
        $this->loadView('careers/index', @$data);
    }

    public function discover_careers()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/departments',
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
        
        $data['dept'] = $decodedResponse['data'] ?? [];
        $data['menu_active'] = 'depts';         
        $data['page_title'] = 'Discover Your Ideal Career';
        $this->loadView('careers/discover_careers', @$data);
    }


    public function dept($id)
    {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/departments/'.$id,
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
            
            $data['dept'] = $decodedResponse['data'] ?? [];
            $data['deptJobs'] = $decodedResponse['data']['jobs'] ?? [];
            $data['menu_active'] = 'careers';
            $this->loadView('careers/DepartmentalPositions', @$data);
            
    }

    

    public function starting_career()
    {
        $data['page_title'] = 'Starting Careers';
        $data['type'] = 'service';
        $data['service'] = 'Starting Careers';
        $data['menu_active'] = 'starting_career';
        $this->loadView('careers/starting_career',  @$data);
    }

    public function experienced_hires()
    {
        $data['page_title'] = 'Experience Hires';
        $data['type'] = 'service';
        $data['service'] = 'Experience Hires';
        $data['menu_active'] = 'experienced_hires';
        $this->loadView('careers/experienced_hires',  @$data);
    }

    

    public function departmental_positions()
    {
        $data['page_title'] = 'DepartmentalPositions';
        $data['type'] = 'service';
        $data['service'] = 'Experience Hires';
        $data['menu_active'] = 'experienced_hires';
        $this->loadView('careers/DepartmentalPositions',  @$data);
    }

    public function job_details()
    {
        $data['page_title'] = 'Job Details';
        $data['type'] = 'service';
        $data['service'] = 'Job Details';
        $data['menu_active'] = 'job_details';
        $this->loadView('careers/job_details',  @$data);
    }

    public function available_positions()
    {
        $data['page_title'] = 'Available Positions';
        $data['type'] = 'service';
        $data['service'] = 'Available Positions';
        $data['menu_active'] = 'available_positions';
        $this->loadView('careers/available_positions',  @$data);
    }

    public function drivers()
    {
        $data['page_title'] = 'Drivers';
        $data['menu_active'] = 'careers';
        $this->loadView('careers/drivers',  @$data);
    }

}
