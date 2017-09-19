<?php

class Display
{
	private $error = array(
			0 => 'Unknown file type, please use controller or model.',
			1 => 'Udefined file name, please specify name of your new file.'
		);
	function help(){
		echo "Welcome to HamPHP CLI\n";
		echo "Usage : php ham [generate [controller | model <name>]]\n\n";
		echo "These are common HamPHP CLI commands used in various situations:\n\n";
		echo " generate\tg\t Generate new file eg. controller, model, etc\n";
		echo " delete\t\td\t Delete file eg. controller, model, etc\t";
	}
	function helpG(){
		echo 'Generate';
	}
	function helpD(){
		echo 'Delete';
	}
	function error($index){
		echo 'Generate Error : '.$this->error[$index]."\n";
	}
}