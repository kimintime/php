<!DOCTYPE>
<html>

<head>
    <title>Personal info</title>
</head>

<body>
    <form action="preview.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name">
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Post code:</td>
                <td><input type="text" name="pcode" size="6">
                    Region: <input type="text" name="region" size="20">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
        </table>
        <p>
            Your interests:<br>
            <?php
                $count = 5;
                $i = 1;
                while ($i <= $count) {
                    echo "$i: ";
                    echo "<input type=\"text\" name=\"interest$i\"><br>\n";
                    $i++;
                } 
            ?>
        </p>
        <p>
            <input type="submit" value="Send">
            <input type="reset" value="Clear">
        </p>
    </form>
</body>
</html>