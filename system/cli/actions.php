<?php

class Actions
{
    public function generate($type, $name)
    {
        if ($type == 'controller') {
            $newfile = fopen($GLOBALS['env']['dir']['controllers'].'/'.ucwords($name).'.php', 'w');
            $controllertext =  file_get_contents('system/cli/template_controller.txt');
            $controllertextedit = str_replace('<<name>>', ucwords($name), $controllertext);
            fwrite($newfile, $controllertextedit);
        } elseif ($type == 'model') {
            $newfile = fopen($GLOBALS['env']['dir']['models'].'/'.ucwords($name).'.php', 'w');
            $modeltext =  file_get_contents('system/cli/template_model.txt');
            $modeltextedit = str_replace('<<name>>', ucwords($name), $modeltext);
            fwrite($newfile, $modeltextedit);
        }
        else return false;
        echo 'Generated : '.$type.' '.ucwords($name)."\n";
    }
    public function delete($type,$name){
        if($type == 'controller'){
            if(file_exists($GLOBALS['env']['dir']['controllers'].'/'.ucwords($name).'.php'))
                unlink($GLOBALS['env']['dir']['controllers'].'/'.ucwords($name).'.php');
            else return 3;
        }else if($type == 'model'){
            if(file_exists($GLOBALS['env']['dir']['models'].'/'.ucwords($name).'.php'))
                unlink($GLOBALS['env']['dir']['models'].'/'.ucwords($name).'.php');
            else return 3;
        }
        else return false;
        echo 'Deleted : '.$type.' '.ucwords($name)."\n";
    }
}
