<?php

    function newvalue(&$string) {
        echo "String value: $string";
        $string = "New string";

        return $string;
    }

    $str= "Default string\n";
    newvalue($str);
    echo "Value at the end: $str\n";

?>