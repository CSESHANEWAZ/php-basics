<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_slice() function</title>
</head>
<body>
    <?php
        // Preserve parameter set to true:
        $a=array("red","green","blue","yellow","brown");
        print_r(array_slice($a,1,3,true));

        echo "<br><br>";

        // Preserve parameter set to false (default):
        $a=array("red","green","blue","yellow","brown");
        print_r(array_slice($a,1,4,false));

        echo "<br><br>";

        
        $b=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
        print_r(array_slice($b,1,2));

        echo "<br><br>";

        $b=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
        print_r(array_slice($b,1,2));
    ?>
</body>
</html>