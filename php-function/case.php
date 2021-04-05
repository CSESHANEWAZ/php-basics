<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function - cAsE</title>
</head>
<body>
    <?php

        $name = "Muhammad Shanewaz";
        $versity = "east west university";
        $address = "DHAKA, BANGLADESH";

        echo strtoupper($name) . "<br>";
        echo strtolower($name) . "<br>";
        echo ucfirst($versity) . "<br>";
        echo ucwords($versity) . "<br>";
        echo lcfirst("$address") . "<br>";


    ?>
</body>
</html>