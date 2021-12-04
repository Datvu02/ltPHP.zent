<?php
  session_start();

  $login = $_POST;

  $_SESSION['products'][] = $login;

  header('location: indext.php');
?>
