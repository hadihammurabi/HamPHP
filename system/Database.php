<?php

namespace System;

use PDO;
use System\Hub\Singleton;
use System\Contracts\Database\Selector;
use System\Contracts\Database\Decorator;
use System\Contracts\Database\Database as DatabaseContract;

class Database implements DatabaseContract, Selector, Decorator
{
    use Singleton;

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
