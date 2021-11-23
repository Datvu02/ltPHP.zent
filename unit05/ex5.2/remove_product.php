<?php
session_start();

$product_inCart = array();
if (isset($_SESSION['cart'])) {
  $product_inCart = $_SESSION['cart'];
  unset($_SESSION['cart'][$_GET['id']]);
  // var_dump($_GET['id']);
  header('location: cart.php');
}
 ?>
