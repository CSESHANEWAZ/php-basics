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
    
        $str = "The date is 05,         April              2021";

        $pattern = '/(\d+),\s([a-z]+)\s(\d+)/i';
        $pattern2 = '/\s\s+/';

        $clean_str = preg_replace($pattern2, ' ', $str); 

        $date = preg_replace($pattern, '$2-$1-$3', $clean_str);

        echo $date;


    ?>
</body>
</html>