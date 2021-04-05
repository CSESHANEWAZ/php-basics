<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function - trimming</title>
</head>
<body>
    <?php

        $input = '               Tom           Cruise              ';
        $output = trim($input);
        print_r($output);

        echo "<br><br>";

        $input2 = "Hello World....!!!";
        echo $input2 . "<br>";
        echo trim($input2,"Hed.");          //trim(string,charlist)


        echo "<br><br>";

        $str = "Hello World!";
        echo $str . "<br>";
        echo trim($str,"Hed!");
    
    ?>
</body>
</html>