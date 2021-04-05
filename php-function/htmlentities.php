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
    
        $input = "This is <a> tag & ..";
        echo htmlentities($input) . "<br><br>";

        $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
        echo htmlentities($str) . "<br><br>";

        $str2 = "<a>cseshanewaz</a>";
        echo htmlentities($str2) . "<br><br>";

        echo ($str2) . "<br><br>";

    ?>
</body>
</html>