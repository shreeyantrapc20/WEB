<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            
            if (empty($_POST["uname"])) {
                echo "<script> alert('Enter the username');</script>";
            }

        }
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="uname" id="uname" placeholder="Username">
        <input type="submit" value="Submit">
    </form>
</body>
</html>