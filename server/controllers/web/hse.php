<?php

class hse extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'Healt & Safety';
        $data['menu_active'] = 'hse';
        $this->loadView('hse');
    }
}
