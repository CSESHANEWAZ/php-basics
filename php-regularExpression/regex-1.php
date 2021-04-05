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

        $str = "Hello World";
        $pattern = '/wor/i';        //case insensitive for using i
        
        echo preg_match($pattern, $str) . "<br><br>"; //output = 1

        $pattern2 = '/wor/';
        echo preg_match($pattern2, $str) . "<br><br>"; //output = 0  doesn't match; 
                                                        //php is case sensitive 
    ?>
</body>
</html>