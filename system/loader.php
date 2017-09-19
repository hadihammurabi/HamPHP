<?php

class Loader{
	function view($name, $data=[]){
		foreach ($data as $key => $value) {
			$$key = $value;
		}
		require 'app/views/templates/'.$name.'.php';
	}
}