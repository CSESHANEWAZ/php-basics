<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function - Splitting</title>
</head>
<body>
    <?php

        $input = "01/03/2021";
        $output = explode('/', $input);
        print_r($output);

        echo "<br><br>";

        echo $output[1];

        echo "<br><br>";

        $input2 = "Hello world. It's a beautiful day.";
        $output2 = explode(' ', $input2, 4);        //explode(separator, string, limit)
        print_r($output2);
    
    ?>
</body>
</html>