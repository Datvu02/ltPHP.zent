<?php
  session_start();

  $key = array();
  $products = array();
  if (isset($_SESSION['products'])) {
    $products = $_SESSION['products'];
    $key = $_GET['id'];
    $product = $products[$key];
    $_SESSION['cart'][] = $product;
    header('location: cart.php');
  }
  echo "<pre>";
    print_r($_SESSION);
  echo "</pre>";
 ?>
