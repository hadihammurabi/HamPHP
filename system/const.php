<?php

if(!defined('DIR')) define('DIR', __DIR__);
if(!defined('DB_FETCH_ASSOC')) define('DB_FETCH_ASSOC', PDO::FETCH_ASSOC);
if(!defined('DB_FETCH_OBJ')) define('DB_FETCH_OBJ', PDO::FETCH_OBJ);

// Fungsi untuk generasi error pada syntax
function phperrorlinter($errno, $errstr, $errfile, $errline)
{
    $error_name = 'Number '.$errno;
    $error_message = 'Pesan: "'.$errstr.'"<br/> File: '.$errfile.'<br/> Baris: '.$errline.'<br/> ';
    $error = new ErrorHandler();
    $load = new Loader($error);
    $error->set($error_name, $error_message);
    $load->view(
        'error/error',
        array(
            'error_name'    => $error_name,
            'error_message'    => $error->get($error_name)
        )
    );
}

// Menampilkan basepath
function basepath($path)
{
    $dir = explode($_SERVER['DOCUMENT_ROOT'], DIR)[1];
    echo $dir.'/../'.$GLOBALS['env']['dir']['app'].'/'.$path;
}