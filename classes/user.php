<?php

session_start();

include 'db_conn.php';

class users extends db_conn{

  public function user_select(){

    $sql = "SELECT * FROM users";
    $result = $this->conn->query($sql);
    if ($result){
      $rows = array();
      while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
    } else {
      return false;
    }
  }

  public function user_insert($fname, $lname, $username, $password, $email)
  {
    $sql = "INSERT INTO users(firstname, lastname, username, password, email) VALUES ('$fname', '$lname', '$username', '$password', '$email')";
    $result = $this->conn->query($sql);
    if ($result) {
      header('location: ./user_post.php');
    } else {
      echo "Inserting error" . $this->conn->error;
    }
  }
  

  public function user_login($username, $pass)
  { $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";

    $result = $this->conn->query($sql);

    if ($result->num_rows == 1) {

      $row = $result->fetch_assoc();

      $_SESSION['user_id'] = $row['user_id'];
      // $_SESSION['username'] = $row['username'];
      // $_SESSION['firstname'] = $row['firstname'];
      // $_SESSION['lastname'] = $row['lastname'];
      // $_SESSION['password'] = $row['password'];
      // $_SESSION['email'] = $row['email'];

      return $row['user_id'];
    } else {

      return false;
    }
  }

  public function user_edit($userID, $fname, $lname, $username, $pass, $email){

    $sql = "UPDATE users SET username = '$username', firstname = '$fname', lastname = '$lname', password = '$pass', email = '$email' WHERE user_id = '$userID'";

    if($this->conn->query($sql)){

      header('location: ./user_post.php');
    }else{

      echo "error" . $this->conn->error;
    }
  }

  public function sp_user($userID){

    $sql = "SELECT * FROM users WHERE user_id = '$userID'";

    $result = $this->conn->query($sql);

    $row = $result->fetch_assoc();

    return $row;
  }

}
