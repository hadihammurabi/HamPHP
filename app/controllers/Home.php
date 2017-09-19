<?php

class Home extends Controller{
	function index(){
		echo 'Home::Index';
		$this->error->set('custom_error','Ini error');
		print_r($this->error->get('custom_error'));
	}
}