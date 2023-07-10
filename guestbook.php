<?php
    $name = strip_tags(trim($_GET["name"]));
    $message = strip_tags(trim($_GET["msg"]));

    if ($name === "" || $message === "") {
        echo "You didn't fill all fields!";

    } else {
        echo "$name: ";
        echo $message;
    }
?>