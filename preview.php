<!DOCTYPE HTML>
<?php
    $name = strip_tags(trim($_POST["name"]));
    $address = strip_tags($_POST["address"]) . ", " . $_POST["postcode"] . " " . $_POST["region"];
    $email = strip_tags(trim($_POST["email"]));
?>



<html>
    <head>
        <title>Preview</title>
    </head>

    <body>
        <h1>Personal info preview</h1>
        <p>
            Name: <?php
            if ($name == "") {
                echo "<b>Name missing!</b>";

            } else {
                echo $name;
            }
            ?><br>
            Address: <?php echo $address; ?><br>
            Email: <?php
            if ($email == "") {
                echo "<b>Missing email!</b>";

            } elseif (strchr($email, "@")) {
                echo $email;

            } else {
                echo "<b>The email is not a proper email address!</b>";
            }
            ?>
        </p>
        <p>Your interests are:</p>
        <ul>
            <?php
                $count = 5;
                $i = 1;
                while ($i <= $count) {
                    if ($_POST["interest$i"] != "") {
                        echo "<li>" . $_POST["interest$i"] . "</li>\n";
                        
                    }
                    $i++;
                }
             ?>
        </ul>
    </body>
</html>