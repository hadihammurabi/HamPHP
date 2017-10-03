<?php

namespace System;

class Request
{
    public function get()
    {
    	$data = array();
    	foreach ($_GET as $key => $value) {
    		$data[$key] = addslashes(htmlentities($value));
    	}
    	return $data;
    }

    public function post()
    {
    	$data = array();
    	foreach ($_POST as $key => $value) {
    		$data[$key] = addslashes(htmlentities($value));
    	}
    	return $data;
    }
}
