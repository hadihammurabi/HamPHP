<?php

namespace System\Contracts\Database;

interface Database
{
    public function __construct($driver, $host, $port, $username, $password, $dbname);

    public function query($query);
}
