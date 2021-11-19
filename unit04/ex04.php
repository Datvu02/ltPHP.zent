<?php
  $str1 = "aghd hdj";
  echo "Chuỗi đầu vào :<pre>";
  print_r($str1);
  echo "</pre>";
  $str2 = strrev($str1);
  $kiemtra = 1;
  for ($i=0; $i < strlen($str1); $i++) {
    if ($str1[$i] !== $str2[$i]) {
      $kiemtra = 0;
    }
  }
  if ($kiemtra) {
    echo "Chuỗi trên là chuỗi Palindrome.";
  }else {
    echo "Chuỗi trên không phải là chuỗi Palindrome.";
  }
 ?>
