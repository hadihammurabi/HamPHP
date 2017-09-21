<?php

class HomeModel extends Model{
	function getUsers(){
		$this->db->query("SELECT * FROM users")->fetch(DB_FETCH_OBJ);
	}
}