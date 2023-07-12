<?php

$a = array(9, 7, 5);
$count = 3;
$animal = "cat";
$text = "Special characters marked with a backslash (\) can be used inside quotation marks (\" and \").\n";

    $output = implode(",",$a);
    echo $text;
    echo "I bought $count {$animal}s.\n";
    echo "Array content: $output";
?>