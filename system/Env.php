<?php

namespace System;

class Env
{
    function __construct()
    {
    }

    function get($name)
    {
        require_once DIR.'/../configs/env.php';
        global $env;
        return $env[$name];
    }
}
