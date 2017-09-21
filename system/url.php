<?php

class URL
{
    public function __construct()
    {
    }

    public function parse()
    {
        $path = array();
        if (isset($_SERVER['REQUEST_URI'])) {
            $request_path = explode('?', $_SERVER['REQUEST_URI']);

            $tmp = explode('/', $request_path[0]);
            $tmparr = array();
            foreach ($tmp as $key => $value) {
                if ($value != "") {
                    array_push($tmparr, $value);
                }
            }
            $path['uri'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $path['call_utf8'] = $request_path[0];
            $path['call_parts'] = $tmparr;

            if (isset($request_path[1])) {
                $path['query_utf8'] = urldecode($request_path[1]);
                $path['query'] = utf8_decode(urldecode($request_path[1]));
                $vars = explode('&', $path['query']);
                foreach ($vars as $var) {
                    $t = explode('=', $var);
                    $path['query_vars'][$t[0]] = $t[1];
                }
            }
        }
        return $path;
    }
}
