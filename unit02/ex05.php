<?php
  $n = 12347;
  $tong = 0;
  echo  "Tổng các chữ số của ".$n." là: ";
  while ($n > 0) {
    $tong =$tong+ $n%10;
    $n = $n/10;
  }
  echo $tong;
 ?>
