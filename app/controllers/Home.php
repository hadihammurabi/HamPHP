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

        // $homemodel = new HomeModel();
        // $homemodel->getUsers();

        $this->load->view('header');
        $this->load->view('home/home');
        $this->load->view('footer');
    }
}
