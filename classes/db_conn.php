<?php

class db_conn{

  private $dataserver = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'sns';
  public $conn;

  public function __construct(){
    $this->conn = new mysqli($this->dataserver, $this->username, $this->password, $this->database);

    if($this->conn->connect_error){

      die( "Connection error" . $this->conn->connect_error);
    }else{

      return $this->conn;
    }

  }
}

?>