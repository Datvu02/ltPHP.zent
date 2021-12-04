<?php
  session_start();
  require('data.php');

  $msp = $_GET['id'];
  // $key = array();
  $products = array();
  if (isset($_SESSION['product'])) {
    $products = $_SESSION['product'];
    // $key = $_GET['id'];
    $product = $products[$msp];
    $_SESSION['cart'][] = $product;
    // header('location: cart.php');
  }
  echo "<pre>";
    print_r ($product);
  echo "</pre>";
 ?>
