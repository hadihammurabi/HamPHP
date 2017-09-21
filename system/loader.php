<?php

class Loader{
	public $vars;
	
	function __construct($obj){
		$this->vars = get_object_vars($obj);
	}
	
	function model($modelname){
		$modelsdir = $GLOBALS['env']['dir']['models'].'/'.$modelname.'.php';
		require $modelsdir;
	}

	function view($name, $data=[]){
		foreach ($data as $key => $value) {
			$$key = $value;
		}
		
		$pagesdir = $GLOBALS['env']['dir']['pages'];

		require $pagesdir.'/'.$name.'.php';
	}

	function lib($libname){
		$appdir = 'libs/'.$libname.'.php';

		require $appdir;
	}
}