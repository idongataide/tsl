<?php

class reapxtra extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['menu_active'] = 'freight';
        $this->loadView('freight', @$data);
      
    }
}
