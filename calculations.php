<?php 
    $firstNumber = (int) strip_tags($_GET["num1"]);
    $secondNumber = (int) strip_tags($_GET["num2"]);

    $product = (int) ($firstNumber * $secondNumber);

    echo "Product: $product \n";
    echo "Quotient: ";

    if ($secondNumber === 0) {
        echo "Can't divide by zero";

    } else {
        $quotient = (float) ($firstNumber / $secondNumber);
        echo $quotient;
    }
?>