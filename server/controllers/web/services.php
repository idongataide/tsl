<?php

class services extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = '';
        $data['menu_active'] = 'services';
        $this->loadView('services', @$data);
    }

    public function dryvan()
    {
        $data['page_title'] = 'Dry Van and Flatbed';
        $data['type'] = 'service';
        $data['service'] = 'Dry Van and Flatbed';
        $data['menu_active'] = 'services';
        $this->loadView('services/DryVan-Flatbed', @$data);
    }

    public function extra()
    {
        $data['page_title'] = 'Extra Services';
        $data['type'] = 'service';
        $data['service'] = 'Extra Services';
        $data['menu_active'] = 'services';
        $this->loadView('services2', @$data);
    }


    public function oil_gas()
    {
        $data['page_title'] = 'Oil and Gas trucking';
        $data['type'] = 'service';
        $data['service'] = 'oil and gas trucking';
        $data['menu_active'] = 'services';
        $this->loadView('services/Oil-Gas', @$data);
    }

    public function fleets()
    {
        $data['page_title'] = 'Fleet Management';
        $data['type'] = 'service';
        $data['service'] = 'fleet management';
        $data['menu_active'] = 'services';
        $this->loadView('services/fleet-services', @$data);
    }


    public function freight()
    {
        $data['menu_active'] = 'freight and forwarding';
        $data['type'] = 'service';
        $data['service'] = 'freight and forwarding';
        $data['menu_active'] = 'services';
        $this->loadView('services/freight-forwarding', @$data);
      
    }
    public function transport()
    {
        $data['menu_active'] = 'freight transportation';
        $data['type'] = 'service';
        $data['service'] = 'freight transportation';
        $data['menu_active'] = 'services';
        $this->loadView('services/freight-transportation', @$data);
      
    }

   
}
