<?php
    $first = $_GET['first'];
    $second = $_GET['second'];
    $third = $_GET['third'];

    function greatest($a, $b, $c) {
        return max($a, $b, $c);
    }
    
    function lowest($a, $b, $c) {
        return min($a, $b, $c);
    }

    $greatest_num = greatest($first, $second, $third);
    $lowest_num = lowest($first, $second, $third);

    echo "Out of the given numbers, the greatest was $greatest_num";
    echo " and the lowest $lowest_num";

?>