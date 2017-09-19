<?php

class Controller{
	public $error, $session;
	function __construct(){
		$this->error = new ErrorHandler();
		$this->session = new Session();
	}
}