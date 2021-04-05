<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Function Static Variables</title>
</head>
<body>
    <?php

        function myfunc()
        {
            static $x = 0;  // static variable
            echo "The value of x= " . $x . "<br>";
            $x++;
            
        }

        function myfunc2()
        {
            $y = 0;     //not static variable
            echo "The value of y= " . $y . "<br>";
            $y++;

        }


        echo "<h3>x is a static variable</h3>";

        myfunc();       //0
        myfunc();       //1
        myfunc();       //2
        myfunc();       //3

        echo "<br><br>";


        echo "<h3>y is not a static variable</h3>";

        myfunc2();       //0
        myfunc2();       //0
        myfunc2();       //0
        myfunc2();       //0
    
    ?>
</body>
</html>