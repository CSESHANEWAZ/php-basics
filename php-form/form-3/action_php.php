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

        $nameErr = $passwordErr = "";

        function test_input($data){
            $date = trim($data);
            $data = htmlentities($data);

            return $data;
        }

        if($_POST){
            if(empty($_POST["fname"])){
                $nameErr = "Name is required";
            }else{
                $fname = test_input($_POST["fname"]);
            }
        }
    ?>
</body>
</html>