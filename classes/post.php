<?php

require_once 'db_conn.php';

class posts extends db_conn{


  public function display_post(){
    $sql = "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.user_id ORDER BY post_id desc";
    $result = $this->conn->query($sql);
    if($result){
      $rows = array();
      while($row = $result->fetch_assoc()){
        $rows[] = $row;
      }
     
      return $rows;
    }else{
      return false;
    }
  }  

  public function display_specific_post($id){
    $sql = "SELECT * FROM posts where user_id = $id ORDER BY post_id desc";
    $result = $this->conn->query($sql);
    if($result){
      $rows = array();
      while($row = $result->fetch_assoc()){
        $rows[] = $row;
      }
      return $rows;
    }else{
      return false;
    }
  }  
  
  public function add_post($userID, $place, $categ, $ment, $images, $target_dir, $target_file){
    $sql = "INSERT INTO posts (user_id, place, category, mention, images) VALUES ('$userID', '$place', '$categ', '$ment', '$images')";
    $res = $this->conn->query($sql);
    if($res){
      return 1;
    }else{
      echo "error upload" . $this->conn->error;
    }
  }
  
  public function showImage(){
    $id = 1;
    $sql = "SELECT * FROM posts WHERE post_id = '$id'";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0){
      return $result->fetch_assoc();
    }
  }
  
  // get the id for editting post
  public function edit_post($id){
    $sql = "SELECT * FROM posts WHERE post_id = '$id'";
    $result = $this->conn->query($sql);
    if ($result){
      $row = $result->fetch_assoc();
      return $row;
    }else{

      return $this->conn->error;  
    }
  }

  public function update_post($postID, $place, $categ, $ment, $images, $target_dir, $target_file){

    $sql = "UPDATE posts SET place = '$place', category = '$categ', mention = '$ment', images = '$images' WHERE post_id = '$postID'";
    $result = $this->conn->query($sql);

    if($result){

      return true;
    }else{
      echo "error" . $this->conn->error;
      return false;
    }
  }

  // public function delete_post($postID){
  //   $sql = "DELETE FROM posts WHERE post_id = '$postID'";
  //   $result = $this->conn->query($sql);
  //   if($result){
  //     return $result;
  //     header('location: ./user_post.php#join');
  //   }else{
  //     return false;
  //   }
  // }
}

  
  
?>
