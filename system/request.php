<?php

class Request{
	function __construct($url=''){
		$this->get($url);
	}
	function get($url){
		$URL = new URL();
		print_r($URL->parse($url));
	}
}