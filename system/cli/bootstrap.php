<?php

require_once 'display.php';
require_once 'actions.php';

$display = new Display();
$actions = new Actions();

$generate   = false;
$delete     = false;
$args       = [];

foreach($argv as $key => $val){
    $args[$key] = strtolower($val);
}

foreach($args as $key => $value){
    if($value == 'g' || $value == 'generate'){
        if($args[$key+1] == 'controller'){
            if(isset($args[$key+2]))
                $actions->generate('controller',$args[$key+2]);
            else $display->error(2);
        }else if($args[$key+1] == 'model'){
            if(isset($args[$key+2]))
                $actions->generate('model',$args[$key+2]);
            else $display->error(2);
        }
        else $display->helpG();
    }
    else if($value == 'd' || $value == 'delete'){
        if($args[$key+1] == 'controller'){
            if(isset($args[$key+2]))
                if($actions->delete('controller',$args[$key+2]) == 3)
                    $display->error(3);
            else $display->error(2);
        }else if($args[$key+1] == 'model'){
            if(isset($args[$key+2]))
                if($actions->delete('model',$args[$key+2]) == 3)
                    $display->error(3);
            else $display->error(2);
        }
        else $display->helpD();
    }
    else if($value == 's' || $value == 'serve'){
        $port = 8000;
        if(isset($args[$key+1])) $port=$args[$key+1];
        $display->serveMessage($port);
        exec('php -t '.__DIR__.'/../../ -S localhost:'.$port);
    }
}

echo "\n";
