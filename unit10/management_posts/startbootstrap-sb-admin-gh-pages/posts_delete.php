<?php
  require_once 'connection.php';

  $data = $_POST;
  $id = (isset($_GET['id'])?$_GET['id']:0);

  // $categories = $conn -> query($sql) -> fetch_assoc();
  $sql = "DELETE FROM posts WHERE id='".$id." '";

  $status = $conn -> query($sql);

  header("Location: admin_posts.php");

 ?>
