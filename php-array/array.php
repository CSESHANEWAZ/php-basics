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

        // Numaric array
        $cars = array("Saab","Volvo","BMW","Toyta");

        echo $cars[0] . " and " . $cars[1] . " are Swedish cars.";

        echo "<br><br>";

        
        // Associative array
        $ages = array("Peter"=>32 , "Quagmire"=>30 , "Joe"=>34);

        
        
        $temp['Sunday'] = 25;
        $temp['Monday'] = 25.50;
        $temp['Tuesday'] = 26;
        $temp['Wednesday'] = 27;
        $temp['Thrusday'] = 24;
        $temp['Friday'] = 28;

        echo "Joe is " . $ages["Joe"] . " years old.";

        echo "<br><br>";

        echo "Today's temperature is " . $temp['Thrusday'] . " degree.";

        echo "<br><br>";

        
        //insert element in array
        array_push($cars,"Volkswagen","Mercedes-Benz");
        print_r($cars);

        echo "<br><br>";
        
        
        
        
        //removing values from array
        unset($temp['Monday']);
        var_dump($temp);

        
    ?>
</body>
</html>