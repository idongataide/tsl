<?php

class safety extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->loadView('safety');
    }
}
