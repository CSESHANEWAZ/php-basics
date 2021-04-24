<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
    $nameErr = $passwordErr = "";

    ?>

    <h2>Registration Form</h2>
    <p><span class="error">* required field.</span></p> <br>

    <form action="action_php.php" method="post">
        <label for="name">Name:</label>

        <input type="text" name="fname" id="" placeholder="enter first name"
        value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>" />

        <span class="error">* <?php echo $nameErr; ?></span>
        <!-- <input type="text" name="lname" id="" placeholder="enter last name"> -->



        <br><br>
        <button type="reset" class="resetbtn">RESET</button>
        <button type="submit" class="submitbtn">SUBMIT</button>
    </form>


</body>
</html>