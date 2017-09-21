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
            $controllertext =  file_get_contents('system/cli/template_model.txt');
            $controllertextedit = str_replace('<<name>>', ucwords($name), $controllertext);
            fwrite($newfile, $controllertextedit);
        }
        echo 'Generated : '.$type.' '.ucwords($name)."\n";
    }
}
