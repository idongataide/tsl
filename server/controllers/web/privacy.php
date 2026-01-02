<?php

class privacy extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'Privacy Policy';
        $this->loadView('privacy-policy', @$data);
    }
}
