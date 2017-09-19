<?php

class Controller{
	public $error, $session, $load;
	function __construct(){
		$this->error = new ErrorHandler();
		$this->session = new Session();
		$this->load = new Loader();
	}
}