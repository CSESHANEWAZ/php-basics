<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Passing Reference</title>
</head>
<body>
    <?php
    
        function add_string($string)
        {
            $string .= ' and add something new';

            echo $string . "<br>";
        }


        $str = "This is string";

        add_string($str);

        echo $str;
    
    ?>
</body>
</html>