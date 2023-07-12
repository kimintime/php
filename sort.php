<?php
    //$numbers= $_GET['numbers'];
    $numbers = "8,65,5,32,76,8,43,32,47,9,34,432,8,9,54,2,54,67,7,332,76,8";
    $arr= explode(',',$numbers);

    echo "Order in the beginning: $numbers\n";
   
   // Sort from greatest to lowest
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] < $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    $greatest_lowest = implode(',', $arr);

    // Sort from lowest to greatest
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    $lowest_greatest = implode(',', $arr);

    echo "From greatest to lowest: $greatest_lowest\n";
    echo "From lowest to greatest: $lowest_greatest\n";
