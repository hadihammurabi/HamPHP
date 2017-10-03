<?php

namespace System\Exceptions;

use System\Loader;

class DBException extends \PDOException{
    private $load;

    public function __construct($message,$code=0,Exception $previous=null){
        $this->load = new Loader();
        parent::__construct($message,$code,$previous);
    }

    public function __toString(){
        $this->load->view('error/error',[
            'error_name' => '[PDO] Code '.$this->code,
            'error_message' => $this->message
        ]);
        return '';
    }
}