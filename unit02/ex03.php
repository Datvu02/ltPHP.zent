<?php
    for ($i=2; $i < 100; $i++) {
        $bool = true;
        for ($j=2; $j <= abs(sqrt($i)); $j++) {
            if ($i % $j == 0) {
            $bool=false;
            break;
            }
        }
        if ($bool) {
            echo "<br>".$i;
        }
    }
 ?>
