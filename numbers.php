<?php

    $number = (int) strip_tags($_GET["num"]);

    if ($number >= 0) {
        while ($number > 0) {
            echo "$number ";
            $number--;
    
            if ($number === 0) {
                echo "$number";
            }
        }

    } else {
        echo "The number has to be at least zero!";
    }

    
?>