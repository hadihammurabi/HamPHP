<?php

namespace App\Models;

use System\Model;

class HomeModel extends Model
{
    public function getUsers()
    {
        #$this->db->query("SELECT * FROM users")->fetch(DB_FETCH_OBJ);
    }
}
