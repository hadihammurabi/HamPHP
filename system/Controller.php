<?php

namespace System;

class Controller
{
    public $error, $session, $load, $request;
    public function __construct()
    {
        $this->error = new ErrorHandler();
        $this->session = new Session();
        $this->load = new Loader($this);
        $this->request = new Request();
    }
}
