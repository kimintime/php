<?php
    $firstString = strip_tags(trim($_GET["string1"]));
    $secondString = strip_tags(trim($_GET["string2"]));
    $combinedStrings = $firstString . $secondString;

    if ($firstString === "" || $secondString === "") {
        echo "You didn't give both strings!";

    } else {
        echo "The passed strings were \"$firstString\" and \"$secondString\". Their combined length is " . strlen($combinedStrings) . " characters!";
    }
?>