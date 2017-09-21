<?php

class Loader
{
    public $vars;
    
    public function __construct($obj)
    {
        $this->vars = get_object_vars($obj);
    }
    
    public function model($modelname)
    {
        $modelsdir = $GLOBALS['env']['dir']['models'].'/'.$modelname.'.php';
        require $modelsdir;
    }

    public function view($name, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        
        $pagesdir = $GLOBALS['env']['dir']['pages'];

        require $pagesdir.'/'.$name.'.php';
    }

    public function lib($libname)
    {
        $appdir = 'libs/'.$libname.'.php';

        require $appdir;
    }
}
