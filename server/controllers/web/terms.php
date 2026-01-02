<?php

class terms extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'terms and conditions';
        $this->loadView('terms-conditions', @$data);
    }
}
