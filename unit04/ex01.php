<?php
  $S = array(1,2,3,5,6,2,6,4,8);
  $max = $S[0];
  foreach ($S as $key) {
    if ($key > $max) {
      $max = $key;
    }
  }
  echo "Số lớn nhất trong mảng là ".$max;
 ?>
