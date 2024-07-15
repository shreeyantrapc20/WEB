<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    if($_SERVER ['REQUEST_METHOD'] == "POST") {

        //RETRIVE THE VALUE

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = $num1 + $num2;
        echo "The sum of ".$num1." and ".$num2." is: ".$sum;



    }
    
    
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <label for="num1">Number 1: </label>
    <input type="text" name="num1" id="num1"> <br><br>
    <label for="num2">Number 2</label>
    <input type="text" name="num2" id="num2"> <br><br>
    <input type="submit" value="Calculate Sum">




    </form>
</body>
</html>