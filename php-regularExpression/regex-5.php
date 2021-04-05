<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str1 = "phpphpphp";
        $str2 = "phphp";
        $str3 = "phhhph";


        $pattern1 = '/(php)+/';         //  + = 1 or more times
        $pattern2 = '/(php)?/';         //  ? = 0 or 1 times


        echo preg_match($pattern1, $str1) . "<br>";
        echo preg_match($pattern1, $str2) . "<br>";
        echo preg_match($pattern1, $str3) . "<br>";

        echo preg_match($pattern2, $str1) . "<br>";
        echo preg_match($pattern2, $str2) . "<br>";
        echo preg_match($pattern2, $str3) . "<br>";
    ?>
</body>
</html>