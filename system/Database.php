<?php

namespace System;

use PDO;
use System\Hub\Singleton;
use System\Contracts\Database\Selector;
use System\Contracts\Database\Decorator;
use System\Contracts\Database\Database as DatabaseContract;
use System\Exceptions\DBException;

class Database implements DatabaseContract, Selector, Decorator
{
    use Singleton;

    private $pdo;

    public function __construct($driver, $host, $port, $username, $password, $dbname)
    {
        try{
            try{
                $this->pdo = new PDO("$driver:host=$host;port=$port;dbname=$dbname", $username, $password);
            }catch(\PDOException $e){
                throw new DBException($e->getMessage(),$e->getCode());
            }
        }catch(DBException $e){
            echo $e;
        }
    }

    public function query($query)
    {
        return $this->pdo->query($query);
    }
}
