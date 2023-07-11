<?php 
    $num1 = (int) strip_tags(trim($_GET["num1"]));
    $num2 = (int) strip_tags(trim($_GET["num2"]));
    $operator = strip_tags($_GET["operator"]);

    if (($num1 == 0) || ($num2 == 0)) {
        echo "You didn't input both numbers!";

        } else {
            if ($operator == 1) {
                $sum = (int) ($num1 + $num2);
                echo $num1 . " + " . $num2 . " = " . $sum;
    
            } elseif ($operator == 2) {
                $sum = (int) ($num1 - $num2);
                echo $num1 . " - " . $num2 . " = " . $sum;
    
            } elseif ($operator == 3) {
                $sum = (int) ($num1 * $num2);
                echo $num1 . " * " . $num2 . " = " . $sum;
    
            } elseif ($operator == 4) {
                $sum = (float) ($num1 / $num2);
                echo $num1 . " / " . $num2 . " = " . $sum;        
        }
    }
?>