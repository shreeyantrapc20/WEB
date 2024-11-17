<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $name = "";

        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            
            $name = $_GET['usrname'];
            echo "<script>alert('Hello' + '$name')</script>";

        }
    
    
    ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <input type="text" name="usrname" placeholder="Enter your name"> <br><br>
        <input type="submit" value="Submit">
  </form>  
</body>
</html>