<?php
  require_once 'connection.php';

  $id = (isset($_GET['id'])?$_GET['id']:0);

  $sql = 'SELECT * FROM `categories` WHERE id = '.$id;

  $categories = $conn -> query($sql) -> fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>categories_detail</title>
  </head>
  <body>
    <h1><?= $categories['name'] ?> :</h1>
    <h2><?= $categories['description'] ?></h2>
    <img src="<?= $categories['thumbnall'] ?>" width="300px" height="300px">
  </body>
</html>
