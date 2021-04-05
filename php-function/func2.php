<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Function Global Variables</title>
</head>
<body>
    <?php

        $a = 5;
        $b = 15;
        $x = 25;
        $y = 35;
        $w = 45;

        function add()
        {
            global $a, $b, $x;      //global variable
            $a = $a + $b;       // $a = 20
            $a = $a + $x;       // $a = 45

            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];      //$z = 60

            $w = $w + $a;       //not executed bcz $w variable is not declare globally.
            

        }

        add();

        echo "Result = " . $a;  //output = 45

        echo "<br>";

        echo "The value of z= " . $z . "<br>";      //output = 60

        echo "The value of w= " . $w . "<br>";      //output = 45
    
    ?>
</body>
</html>