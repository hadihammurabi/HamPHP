<?php

namespace System;

use System\Env;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->env = new Env();
        $dbset = $this->env->get('db');

        $this->db = new Database($dbset['driver'], $dbset['host'], $dbset['port'], $dbset['username'], $dbset['password'], $dbset['name']);
    }
}
