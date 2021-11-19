<?php
  echo "Cách 1:<br>";
  $A = array(1,'Đầu mảng-','Giua mảng-','Cuối mảng!',2);

  echo "Mảng đầu vào";
  echo "<pre>";
    print_r($A);
  echo "</pre>";
  $S = array();
  for ($i=0; $i < count($A); $i++) {
    array_push($S,$A[count($A)-$i-1]);
  }
  echo "Mảng đảo ngược";
  echo "<pre>";
    print_r($S);
  echo "</pre>";

  echo "Cách 2:<br>";
  echo "Mảng đầu vào";
  echo "<pre>";
    print_r($A);
  echo "</pre>";

  echo "Mảng đảo ngược";
  echo "<pre>";
    print_r(array_reverse($A));
  echo "</pre>";
 ?>
