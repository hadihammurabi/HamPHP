<?php

namespace App\Controllers;

use System\Controller;
use App\Models\HomeModel;

class Home extends Controller
{
    public function index()
    {
        // this method is useless in autoloader.
        // $this->load->model('HomeModel');

        $homemodel = new HomeModel();
        $homemodel->getUsers();

        // test helper loader.
        /*$this->load->helper("encryption");
        $string     = "hello world";
        $key        = "12345";
        $encrypted  = encice($string, $key);
        $decrypted  = decice($encrypted, $key);
        var_dump($string == $decrypted);*/

        $this->load->view('header');
        $this->load->view('home/home');
        $this->load->view('footer');
    }
}
