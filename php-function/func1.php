<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Function</title>
</head>
<body>
    <?php

        //function definition
        function make_name($firstname, $lastname)
        {
            $fullname = $firstname . " " . $lastname;

            return $fullname;
        }

        
        //function calling
        echo "My name is " . make_name("Jonh", "Marry");
    
    ?>
</body>
</html>