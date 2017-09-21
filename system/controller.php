<?php

class Controller
{
    public $error;
    public $session;
    public $load;
    public function __construct()
    {
        $this->error = new ErrorHandler();
        $this->session = new Session();
        $this->load = new Loader($this);
    }
}
