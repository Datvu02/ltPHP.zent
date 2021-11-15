<?php
  $a=2;$b=4;$c=8;
  if ($a==0 && $b!=0) {
    $nghiem=-$c/$b;
    echo "Phương trình có nghiệm duy nhất là:".round($nghiem,$p=2);
  }elseif ($b==0 || $a==0 && $b==0) {
    echo "Phương trình vô nghiệm";
  }else{
    $d=$b*$b - $a*$c;
    if ($d < 0) {
      echo "Phương trình vô nghiệm";
    }elseif ($d == 0) {
      $nghiem=-$b/(2*$a);
      echo "Phương trình có nghiệm kép x1=x2=:".round($nghiem,$p=2);
    }elseif ($d > 0) {
      $X1=(-$b+sqrt($d))/(2*$a);
      $X2=(-$b-sqrt($d))/(2*$a);
      echo "Phương trình có 2 nghiệm:";
      echo "<br>X1=".round($X1,$p=2);
      echo "<br>X2=".round($X2,$p=2);
    }
  }
 ?>
