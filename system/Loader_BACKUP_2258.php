<?php

namespace System;

use System\Env;
use System\ErrorHandler;

class Loader
{
    private $env;

    public function __construct()
    {
        $this->env = new Env();
        $this->error = new ErrorHandler();
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

    public function controller($name)
    {
        $controllerdir = $this->env->get('dir')['controllers'].'/'.$name.'.php';
        $controllernamespace = "App\\Controllers\\$name";

<<<<<<< HEAD
        if(file_exists($controllerdir)){
=======
        if (!$this->env->get('production')) {
            $error_name = 'file_unexists';
            $error_message = 'File <i><b>'.$name.'.php</b></i> tidak tersedia';
        } else {
            $error_name = '404';
            $error_message = 'Halaman yang Anda tuju, tidak tersedia.';
        }

        $this->error->set($error_name, $error_message);

        if (file_exists($controllerdir)) {
>>>>>>> f4411600a68b11fd495bf339f1b4b2f2d75b7763
            require_once($controllerdir);
            if (class_exists($controllernamespace)) {
                return new $controllernamespace;
            } else {
                if (!$this->env->get('production')) {
                    $error_name = 'class_unexists';
                    $error_message = 'Class <i><b>'.$name.'</b></i> tidak tersedia';
                } else {
                    $error_name = '404';
                    $error_message = 'Halaman yang Anda tuju, tidak tersedia.';
                }

                            $this->error->set($error_name, $error_message);

<<<<<<< HEAD
                $this->view('error/error',
                array(
                        'error_name'    => $error_name,
                        'error_message'    => $this->error->get($error_name)
                ));
            }    
        }else{
            if (!$this->env->get('production')) {
                $error_name = 'file_unexists';
                $error_message = 'File <i><b>'.$name.'.php</b></i> tidak tersedia';
            } else {
                $error_name = '404';
                $error_message = 'Halaman yang Anda tuju, tidak tersedia.';
            }

            $this->error->set($error_name, $error_message);
            
            $this->view('error/error',
                array(
                        'error_name'    => $error_name,
                        'error_message'    => $this->error->get($error_name)
                ));
=======
                            $this->view(
                                'error/error',
                                array(
                                    'error_name'    => $error_name,
                                    'error_message'    => $this->error->get($error_name)
                                )
                            );
            }
        } else {
            $this->view(
                'error/error',
                array(
                        'error_name'    => $error_name,
                        'error_message'    => $this->error->get($error_name)
                )
            );
>>>>>>> f4411600a68b11fd495bf339f1b4b2f2d75b7763
        }
    }

    public function method($controller, $name)
    {
        if (method_exists($controller, $name)) {
            $controller->$name();
        } else {
            if (!$this->env->get('production')) {
                $error_name = 'method_unexists';
                $error_message = 'Method <i><b>'.$name.'</b></i> tidak tersedia';
            } else {
                $error_name = '404';
                $error_message = 'Halaman yang Anda tuju, tidak tersedia.';
            }

            $this->error->set($error_name, $error_message);

            $this->view(
                'error/error',
                array(
                        'error_name'    => $error_name,
                        'error_message'    => $this->error->get($error_name)
                )
            );
        }
    }
}
