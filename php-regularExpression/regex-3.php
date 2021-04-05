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
    
        $str = "p8p";
        $str2 = "php is a programming language";
        $str3 = "p10p";
        $pattern = '/p[a-z0-9]p/';                  //not matches: phhp, p88p, p#p

        echo preg_match($pattern, $str) . "<br>";  //1
        echo preg_match($pattern, $str2) . "<br>";  //1
        echo preg_match($pattern, $str3) . "<br>";  //0
        
    ?>
</body>
</html>