<?php

class Database{
	private $pdo;

	function __construct($driver, $host, $username, $password, $dbname){
		$this->pdo = new PDO("$driver:host=$host;dbname=$dbname",$username,$password);
	}

	function query($query){
		return $this->pdo->query($query);
	}

}