<!DOCTYPE HTML>
<html>

<head>
    <title>Preview</title>
</head>

<body>
    <h1>Personal info preview</h1>
    <p>
        Name:
        <?php echo $_POST["name"]; ?><br>

        Address:
        <?php
        echo $_POST["address"] . ", " .
            $_POST["postcode"] . " " . $_POST["region"];
        ?><br>
        Email:
        <?php echo $_POST["email"]; ?>
    </p>
</body>

</html>