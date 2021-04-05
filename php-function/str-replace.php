<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function - String Replace</title>
</head>
<body>
    <?php

        $input = "01.03-2021";
        $date = str_replace(array('.', '-'), '/', $input);  //str_replace(find, replace, input)
        print_r($date);

        echo "<br><br>";

        echo "<p>Search the string \"Hello World!\", find the value \"world\" and replace it with \"Peter\":</p>";

        echo str_replace("World", "Peter", "Hello World");
    ?>
</body>
</html>