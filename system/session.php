<?php

class Session{
	function __construct(){
		if(session_status() == PHP_SESSION_NONE)
			session_start();
	}

	function set($name, $value){
		$_SESSION[$name] = $value;
	}

	function get($name){
		return $_SESSION[$name];
	}
}