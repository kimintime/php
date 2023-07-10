<?php
    $drink = strip_tags($_GET["drink"]);
    $sweetened = strip_tags($_GET["sugar"]);

    if ($drink === "coffee") {
        echo "Coffee ";

    } elseif ($drink === "tea") {
        echo "Tea ";
    }

    if ($sweetened == 1) {
        echo "with sugar!";

    } elseif ($sweetened == 2) {
        echo "without sugar.";
    }
?>

