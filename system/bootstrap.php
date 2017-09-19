<script type="text/javascript" src="../app/views/js/jquery.min.js"></script>
<script type="text/javascript" src="../app/views/js/tether.min.js"></script>
<link rel="stylesheet" type="text/css" href="../app/views/css/bootstrap/bootstrap.min.css">
<script type="text/javascript" src="../app/views/js/bootstrap.min.js"></script>

<?php

require_once 'session.php';
require_once 'error_handler.php';
require_once 'url.php';
require_once 'request.php';

require_once 'controller.php';
require_once 'model.php';

require_once 'configs/env.php';

if(!$env['production']){
	ini_set('display_errors', 'On');
    error_reporting(E_ALL);
}

$url = new URL();
$urlcallparts = $url->parse()['call_parts'];

if(count($urlcallparts) > 0){
	$controllername = ucwords($urlcallparts[0]);
	if(file_exists('app/controllers/'.$controllername.'.php')){
		require_once 'app/controllers/'.$controllername.'.php';
		if(class_exists($controllername)){
			$controller = new $controllername();
	
			if(!isset($urlcallparts[1]))
				$methodname = 'index';
			else
				$methodname = $urlcallparts[1];
	
			if(method_exists($controller, $methodname))
				$controller->$methodname();
			else{
				$controller->error->set('method_unexists','Method tidak tersedia');
				echo $controller->error->display('method_unexists');
			}
		}
	}
}
