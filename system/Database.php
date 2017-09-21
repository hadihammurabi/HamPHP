<?php

namespace System;

use PDO;

class Database
{
    private $pdo;

    public function __construct($driver, $host, $port, $username, $password, $dbname)
    {
        $this->pdo = new PDO("$driver:host=$host;port=$port;dbname=$dbname", $username, $password);
    }

    public function query($query)
    {
        return $this->pdo->query($query);
    }
}
