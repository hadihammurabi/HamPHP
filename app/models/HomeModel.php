<?php

class Users{}

class HomeModel extends Model{
	function getUsers(){
		print_r($this->db->query("SELECT * FROM users")->fetch(DB_FETCH_OBJ));
	}
}