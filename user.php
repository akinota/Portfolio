<?php

require_once 'classes/user.php';

$user = new users;

// subscribe user
if(isset($_POST['subsc'])){

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $emial = $_POST['email'];

  $user->user_insert($fname, $lname, $username, $password, $email);
}elseif(isset($_POST['edit_user'])){

  $username = $_POST['username'];
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $pass = $_POST['password'];
  $email = $_POST['email'];
  $userID = $_POST['user_id'];

  $user->user_edit($userID, $fname, $lname, $username, $pass, $email);
}
?>