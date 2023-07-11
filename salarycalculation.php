<?php 
    $workedHours = (int) strip_tags(trim($_GET["hours"]));
    $hourlyPay = (float) strip_tags(trim($_GET["hourlypay"]));
    $taxPercent = (int) strip_tags(trim($_GET["taxperc"]));

    if (($workedHours === 0) || ($hourlyPay === 0)|| ($taxPercent === 0)) {
        echo "Not all fields filled!";

    } else {
        $salary = (float)($workedHours * $hourlyPay);
        $tax = (float) ($salary * $taxPercent / 100);
        $final = (float) ($salary - $tax);

        echo "Salary without taxes: $salary\n";
        echo "Amount of tax: $tax\n ";
        echo "Salary after taxes: $final ";
    }
?>