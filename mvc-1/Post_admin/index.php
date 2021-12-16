<?php
  include_once 'Controllers/PostController.php';
  //index.php?mod=category&act=index
  $mod = isset($_GET['mod']) ? $_GET['mod'] : 'admin';
  $act = isset($_GET['act']) ? $_GET['act'] : 'index';

  // echo $mod;
  // echo "<br>".$act;
  $Controller_obj = new PostController();
  $Controller_obj -> index();
 ?>
