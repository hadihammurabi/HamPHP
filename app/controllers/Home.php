<?php

class Home extends Controller
{
    public function index()
    {
        $this->load->model('HomeModel');

        $homemodel = new HomeModel();
        $homemodel->getUsers();

        $this->load->view('header');
        $this->load->view('home/home');
        $this->load->view('footer');
    }
}
