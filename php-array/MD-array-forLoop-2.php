<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional array using for loop (associative method)</title>
</head>
<body>
    <?php

        $marks = array
        (
            "Jonh" => array(
                "mathametics" => 80,
                "Physics" => 75,
                "Chemistry" => 78
            ),
            "Marry" => array(
                "mathametics" => 60,
                "Physics" => 72,
                "Chemistry" => 60
            ),
            "Max" => array(
                "mathametics" => 65,
                "Physics" => array(
                    "mid-1"=>15,
                    "mid-2"=>18,
                    "final"=>22,
                    "quiz"=>8,
                    "attendence"=>5,
                    "project"=>15
                ),
                "Chemistry" =>70
            )
        );


        echo "Jonh's marks in Chemistry: ";
        echo $marks['Jonh']['Chemistry'] . "<br/>";

        echo "Marry's marks in Mathametics: ";
        echo $marks['Marry']['mathametics'] . "<br/>";

        echo "Max's mark in Chemistry: ";
        echo $marks['Max']['Chemistry'] . "<br/>";

        echo "Max's marks in Physics(final exam): ";
        echo $marks['Max']['Physics']['final'] . "<br/>";
    
    ?>
</body>
</html>