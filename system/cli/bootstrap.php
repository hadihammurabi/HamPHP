<?php

require_once 'configs/env.php';
require_once 'display.php';
require_once 'actions.php';

$display = new Display();
$actions = new Actions();


$generate 	= false;
$delete		= false;

if(isset($argv[1])){
	if(strtolower($argv[1]) == 'g' || strtolower($argv[1]) == 'generate') {
		$generate = true;
		if(isset($argv[2])){
			if(strtolower($argv[2]) == 'controller'){
				if(isset($argv[3])){
					$actions->generate('controller',$argv[3]);
					return;
				}else{
					$display->error(2);
					return;
				}
			}else if(strtolower($argv[2]) == 'model'){
				if(isset($argv[3])){
					$actions->generate('model',$argv[3]);
					return;
				}else{
					$display->error(2);
					return;
				}
			}else{
				$display->error(1);
				return;
			}
		}
		$display->helpG();
	}else if(strtolower($argv[1]) == 'd' || strtolower($argv[1]) == 'delete') {
		$delete = true;
		$display->helpD();
	}else $display->error(0);
}else $display->help();


echo "\n";