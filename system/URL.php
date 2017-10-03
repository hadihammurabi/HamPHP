<?php
namespace System;
use System\Controller;
use System\Env;
use System\Loader;
class URL
{
    public function __construct()
    {
        $this->env = new Env();
        $this->load = new Loader();
    }
    public function getUri()
    {
        $a = explode($_SERVER['DOCUMENT_ROOT'], $_SERVER['SCRIPT_FILENAME']);
        $a = explode("/", end($a), -1);
        if (isset($a[1])) {
            $a = explode(end($a), $_SERVER['REQUEST_URI']) xor (isset($a[1]) and $a = $a[1] or $a = "/");
        } else {
            $a = $_SERVER['REQUEST_URI'];
        }
        do {
            $a = str_replace("//", "/", $a, $n);
        } while ($n);
        $uri = "/".trim($a, "/");
        return $uri;
    }
    public function parse()
    {
        $path = array();
        $request_path = explode('?', $this->getUri());
        $tmp = explode('/', $request_path[0]);
        $tmparr = array();
        foreach ($tmp as $key => $value) {
            if ($value != "") {
                array_push($tmparr, $value);
            }
        }
        $path['uri'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $path['call_utf8'] = $request_path[0];
        
        if(isset($tmparr[0]))
            $path['call_parts'] = ($tmparr[0] == 'index.php')?array_slice($tmparr,1):$tmparr;
        if (isset($request_path[1])) {
            $path['query_utf8'] = urldecode($request_path[1]);
            $path['query'] = utf8_decode(urldecode($request_path[1]));
            $vars = explode('&', $path['query']);
            foreach ($vars as $var) {
                $t = explode('=', $var);
                $path['query_vars'][$t[0]] = $t[1];
            }
        }
        return $path;
    }
    function route(){
        $urlcallparts = isset($this->parse()['call_parts'])?$this->parse()['call_parts']:'';
        // Pengambilan nama controller
        $controllername = ucwords(isset($urlcallparts[0])?$urlcallparts[0]:$this->env->get('default')['controller']);
        $controllernamespace = "App\\Controller\\$controllername";
        // Load controller
        $controller = $this->load->controller($controllername);
        // Load method
        $methodname = isset($urlcallparts[1])?$urlcallparts[1]:'index';
        $this->load->method($controller, $methodname);
    }
}