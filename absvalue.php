<?php 
    $num = strip_tags($_GET["num"]);
    $absoluteValue = abs($num);

    echo "The absolute value of $num is $absoluteValue";
?>