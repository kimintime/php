<?php

   // $numbers = $_GET['numarray'];
    $numbers = "5,7,3,23,56,85,2";
    $numarray = explode(',',$numbers);

    $sum = array_sum($numarray);

    $count = count($numarray);
    $avg = $sum / $count;

    $points = implode(' ', $numarray);

    echo "The points were: $points\n";
    echo "Sum of points: $sum\n";
    echo "Average of points: $avg";
?>