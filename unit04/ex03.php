<?php
  $str = "  học   lập trình      PHP     vui  ghê!";
  echo "<br>Chuỗi đầu vào: <pre>";
  print_r($str);
  echo "</pre>";

  $str = trim(preg_replace('/\s+/',' ',$str));
  echo "<br>Chuỗi đã được xóa các khoảng trắng dư thừa: <pre>";
  print_r($str);
  echo "</pre>";

  echo "<br>Chuỗi đã được in hoa ký tự đầu: <pre>";
  print_r(ucfirst($str));
  echo "</pre>";

 ?>
