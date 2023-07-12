<?php
    $string = $_GET['string'];
    $mode = $_GET['mode'];

    if ($mode == 1) {
        $result = implode(' ', str_split(strtolower($string)));

    } elseif ($mode == 2) {
        $result = implode(' ', str_split(strtoupper($string)));

    } elseif ($mode == 3) {
        $result = implode(' ', array_reverse(str_split(strtolower($string))));

    } elseif ($mode == 4) {
        $result = implode(' ', array_reverse(str_split(strtoupper($string))));
        
    } else {
        $result = "Invalid mode selected.";
    }

echo $result;
?>
