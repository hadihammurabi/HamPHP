<?php

namespace System;

use System\Env;

class Loader
{
    public $vars;
    private $env;

    public function __construct($obj)
    {
        $this->env = new Env();
        $this->vars = get_object_vars($obj);
    }

    public function helper($name)
    {
        require_once __DIR__."/helpers/".$name.".php";
    }

    public function view($name, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        
        $pagesdir = $this->env->get('dir')['pages'];
        require $pagesdir.'/'.$name.'.php';
    }

    public function lib($libname)
    {
        $appdir = 'libs/'.$libname.'.php';

        require $appdir;
    }
}
