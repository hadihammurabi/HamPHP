<?php

namespace System;

class Model
{
    public $db;

    public function __construct()
    {
        $dbset = $GLOBALS['env']['db'];

        $this->db = new Database($dbset['driver'], $dbset['host'], $dbset['port'], $dbset['username'], $dbset['password'], $dbset['name']);
    }
}
