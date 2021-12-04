<?php
  $str = '1,28,293,2983,12,21';
  echo $str . "<br>";
  $array_str = explode( ",", $str);
  echo implode( ";", $array_str);
 ?>
