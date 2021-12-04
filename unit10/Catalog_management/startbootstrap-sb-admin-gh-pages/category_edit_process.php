<?php
  require_once 'connection.php';

  $data = $_POST;

  $sql = "UPDATE categories SET name = '".$data['name']."', description = '".$data['description']."' WHERE id= ".$data['id']."";

  $status = $conn -> query($sql);

  if ($status == true) {
    header("Location: admin_category.php");
  }else {
    header("Location: category_edit.php");
  }
 ?>
