<?php

class Model{
	public $db;

	function __construct(){
		$dbset = $GLOBALS['env']['db'];

		$this->db = new Database($dbset['driver'], $dbset['host'],$dbset['username'],$dbset['password'],$dbset['name']);
	}
}