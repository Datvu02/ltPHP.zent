<?php
  session_start();

  $login = $_POST;

  $_SESSION['in_login'][] = $login;

  header('location: login_list.php');

?>
