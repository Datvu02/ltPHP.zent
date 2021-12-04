<?php
  require_once 'connection.php';

  $data = $_POST;
  $sql = "UPDATE posts SET title = '".$data['title']."', description = '".$data['description']."' WHERE id= ".$data['id']."";

  $status = $conn -> query($sql);

  if ($status == true) {
    header("Location: admin_posts.php");
  }else {
    header("Location: posts_edit.php");
  }
 ?>
