<?php
session_start();


require('data.php');

$msp = $_GET['id'];
if (isset($_SESSION['product'][$msp])) {
  $_SESSION['product'][$msp]['soluong']++;
}else {
  $product = $products[$msp];
  $product['soluong'] = 1;
  $_SESSION['product'][$msp] = $product;

}
$min =   $_SESSION['product'][$msp]['soluong']++;
echo "<pre>";
  print_r($min);
echo "</pre>";
  // header('location: cart.php')

 ?>
