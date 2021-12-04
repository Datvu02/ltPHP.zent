<?php
session_start();

if (isset($_SESSION['cart'])) {
  $_SESSION['cart'][$_GET['id']]['soluong'] -=1;
if ($_SESSION['cart'][$_GET['id']]['soluong'] == 0) {
  unset($_SESSION['cart'][$_GET['id']]);
}
header('location: cart.php');
}

 ?>
