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
    
        $str = "p5678p";
        $str2 = "p      p";
        $str3 = "pabAB_027p";
        $str4 = "p @#%&_cseShhanewaz_#### p";
        $str5 = "pp";
        $str6 = "phhhhhp";
        $str7 = "phyhp";
        $str8 = "phhhp";
        $str9 = "pp";
        
       
        
        $pattern = '/p\d*p/';       // * => 0 or more times
        $pattern2 = '/p\d{2,5}p/';      //{a,b} => between a and b times
        
        $pattern3 = '/p\s*p/';
        
        $pattern4 = '/p\w*p/';

        $pattern5 = '/p.*p/i';      // i = case insensitive

        $pattern6 = '/p.+p/';        // + = 1 or more times

        $pattern7 = '/ph+p/';

        $pattern8 = '/ph?p/';       // ? = 0 or 1 times

        
        
        
        echo preg_match($pattern, $str) . "<br>";
        echo preg_match($pattern2, $str) . "<br>";

        echo preg_match($pattern3, $str2) . "<br>";

        echo preg_match($pattern4, $str3) . "<br>";

        echo preg_match($pattern5, $str4) . "<br>";

        echo preg_match($pattern6, $str5) . "<br>";

        echo preg_match($pattern7, $str6) . "<br>";

        echo preg_match($pattern7, $str7) . "<br>";

        echo preg_match($pattern8, $str8) . "<br>";

        echo preg_match($pattern8, $str9) . "<br>";
    ?>
</body>
</html>