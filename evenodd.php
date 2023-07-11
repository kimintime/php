<?php 
    $number = (int) strip_tags($_GET["num"]);

    if ($number > 0) {
        $product = (int) ($number % 2);

        if ($product === 0) {
            echo "$number is even.";

        } else {
            echo "$number is odd."; 
        }

    } else {
        echo "The input value is invalid!";
    }
?>