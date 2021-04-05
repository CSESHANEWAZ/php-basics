<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Function Local Variables</title>
</head>
<body>
    <?php

        $y = 10;    //local scope outside function

        function myTest() {
        $x = 5; // local scope inside function

        echo "<p>Variable x inside function is: $x</p>";

        echo "<p>Variable y inside function is: $y</p>";
        } 


        myTest();

        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";

        echo "<p>Variable y outside function is: $y</p>";
    
    ?>
</body>
</html>