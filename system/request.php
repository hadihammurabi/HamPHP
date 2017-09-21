<?php

class Request
{
    public function __construct($url = '')
    {
        $this->get($url);
    }
    public function get($url)
    {
        $URL = new URL();
        print_r($URL->parse($url));
    }
}
