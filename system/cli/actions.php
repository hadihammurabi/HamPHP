<?php

class Actions{
	function generate($type, $name){
		$newfile = fopen('app/controllers/'.ucwords($name).'.php', 'w');
		$controllertext =  file_get_contents('system/cli/template_controller.txt');
		$controllertextedit = str_replace('<<name>>', ucwords($name), $controllertext);
		fwrite($newfile, $controllertextedit);

		echo 'Generated : '.$type.' '.ucwords($name)."\n";
	}
}