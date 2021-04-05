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
    
        $email = "2016-3-60-050@std.ewubd.edu";
        $email2 = "cse.md.shanewaz@gmail.com";
        $email3 = "example.cse@example@com";
        $email4 = "example.cse@exam@ple.com";
        $email5 = "example.cse@stu-ewubd.edu";
        $email6 = "info@xyz_20.com";
        

        $pattern = '/^[a-z\d\._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i';


        if(preg_match($pattern, $email)){
            echo "Is a valid email <br>";
        }else{
            echo "Not a valid email <br>";
        }


        echo preg_match($pattern, $email2) . "<br>";
        echo preg_match($pattern, $email3) . "<br>";
        echo preg_match($pattern, $email4) . "<br>";
        echo preg_match($pattern, $email5) . "<br>";
        echo preg_match($pattern, $email6) . "<br>";

    ?>
</body>
</html>