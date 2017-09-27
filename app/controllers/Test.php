<?php

namespace App\Controllers;

use System\Controller;

class Test extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 123;
    }
}
