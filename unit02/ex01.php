<?php
  for ($i=1; $i <= 100; $i++) {
    if ($i%3==0 && $i%5==0) {
      echo "<br>FizzBuzz";
    }elseif ($i%3==0) {
      echo "<br>Fizz";
    }elseif ($i%5==0) {
      echo "<br>Buzz";
    }else {
      echo "<br>".$i;
    }

  }
 ?>
