<?php

class sustainability extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['menu_active'] = 'sustainability';
        $this->loadView('sustainability',  @$data);
    }
}
