<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array Using For Loop (numaric method)</title>
</head>
<body>
    <?php

        // Multidimensional array(follow numaric array method)

        $cars = array
        (
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        //echo $cars[0][0] . ": In Stock = " . $cars[0][1] . " and Sold = " . $cars[0][2] . ".<br><br>";
        //echo $cars[1][0] . ": In Stock = " . $cars[1][1] . " and Sold = " . $cars[1][2] . ".<br><br>";
        //echo $cars[2][0] . ": In Stock = " . $cars[2][1] . " and Sold = " . $cars[2][2] . ".<br><br>";
        //echo $cars[3][0] . ": In Stock = " . $cars[3][1] . " and Sold = " . $cars[3][2] . ".<br><br>";

        for ($row=0; $row < 4 ; $row++) { 
            echo "<p><b>Item No. $row: </b></p>";
            echo "<ul>";

            for ($col=0; $col < 3 ; $col++) { 
                echo "<li>" . $cars[$row][$col] . "</li>";
            
            }
            echo "</ul>";
        }
    ?> 
    
</body>
</html>