<?php

namespace System;

use PDO;

class Database
{
    private $pdo;

    public function __construct($driver, $host, $username, $password, $dbname)
    {
        $this->pdo = new PDO("$driver:host=$host;dbname=$dbname", $username, $password);
    }

    public function query($query)
    {
        return $this->pdo->query($query);
    }
}
