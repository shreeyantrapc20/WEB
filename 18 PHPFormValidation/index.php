<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $input = "";
        $nameerr="";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            
            if (empty($_POST["uname"])) {

                $nameerr = "Provide the input";
                
            } else {

                $input = $_POST["uname"];
                if(!ValidateInputLength($input, 2, 10)) {
                        $nameerr = "Invalid input length";
                } else if(!preg_match("/^[a-zA-Z]*$/", $input)) {
                        $nameerr = "Only alphabets are allowed";
                } 

            }  
            

        }
    
    
    
    function ValidateInputLength($input, $minLength, $maxLength) {

        $length = strlen($input);

        if($length < $minLength || $length > $maxLength) {
           return false; 
        }

        return true;
    }

    ?>



    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <span class="err"><?php echo $nameerr;?></span> <br><br>
        <input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo $input; ?>"> <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>