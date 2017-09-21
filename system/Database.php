<?php

namespace System;

use PDO;
use System\Hub\Singleton;

class Database
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
