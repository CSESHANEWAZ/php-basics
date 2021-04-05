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
    
        $str = "php is a programming language";

        $pattern = '/^php/';
        $pattern2 = '/age$/';
        $pattern3 = '/d+/';         // + => at least 1 or more times
        $pattern4 = '/p[hu]p/';     //matches: php, pup     //not matches: phup, pop, phhp, puup

        echo preg_match($pattern, $str) . "<br>";   //1
        echo preg_match($pattern2, $str) . "<br>";  //1
        echo preg_match($pattern3, $str) . "<br>";  //0
        echo preg_match($pattern4, $str) . "<br>";  //1
    
    ?>
</body>
</html>