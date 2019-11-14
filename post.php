<?php

require_once 'classes/post.php';

$post = new posts;

if(isset($_POST['post'])){  
  $userID = $_POST['userid'];
  $place = $_POST['pname'];
  $categ = $_POST['category'];
  $ment = $_POST['ment'];
  $images = $_FILES['images']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES['images']['name']);

  $res = $post->add_post($userID, $place, $categ, $ment, $images, $target_dir, $target_file);

  if($res){
    move_uploaded_file( $_FILES['images']['tmp_name'], $target_file);
    header ('location: ./timeline.php');
  }
}elseif(isset($_POST['edit_post'])){
  $postID = $_POST['postid'];
  $place = $_POST['pname'];
  $categ = $_POST['category'];
  $ment = $_POST['ment'];
  $images = $_FILES['images']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES['images']['name']);

  $result = $post->update_post($postID, $place, $categ, $ment, $images, $target_dir, $target_file);

  if($result){
    move_uploaded_file( $_FILES['images']['tmp_name'], $target_file);
    header('location: ./user_post.php#join');
  }
}



?>