<?php

class ErrorHandler
{
    public function set($name, $msg)
    {
        $session = new Session();
        $session->set('error_'.$name, $msg);
    }
    public function get($name)
    {
        $session = new Session();
        return $session->get('error_'.$name);
    }
}
