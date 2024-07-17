<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //defiining variables
        $input = "";
        $nameerr="";
        $emailerr="";
        $ageerr="";
        $emailIP = "";
        $age="";
        $gender="";
        $gendererr="";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            
            //getting input
            $input = $_POST["uname"];
            $emailIP = $_POST["uemail"];
            $age = $_POST["uage"];
            $gender = $_POST["gender"];

            //username validation
            if (empty($input)) {
                $nameerr = "Provide the input";    
            } else {

                if(!ValidateInputLength($input, 2, 10)) {
                        $nameerr = "Invalid input length";
                } else if(!preg_match("/^[a-zA-Z]*$/", $input)) {
                        $nameerr = "Only alphabets are allowed";
                } 

            }  

            //email validation
            
            if(empty($emailIP)) {
                $emailerr = "Provide the email input";
            }
            else if(!filter_var($emailIP, FILTER_VALIDATE_EMAIL)) {
                $emailerr = "Invalid email";
            }

            //age validation
           
            if(empty($age)) {
                $ageerr = "Provide the input";
            } else if($age <= 10 || $age >= 50) {
                $ageerr="Age must be between 10 and 50";
            }

            //gender validation
            if(empty($gender)) {
                $gendererr = "What is your gender?";
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
        <span class="err"><?php echo $nameerr;?></span> 
        <input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo $input; ?>"> <br><br>
        <span class="err"><?php echo $emailerr;?></span> 
        <input type="text" name="uemail" id="uemail" placeholder="Email" value="<?php echo $emailIP; ?>"> <br><br>
        <span class="err"><?php echo $ageerr;?></span> 
        <input type="text" name="uage" id="uage" placeholder="Age" value="<?php echo $age; ?>"> <br><br>
        <span class="err"><?php echo $gendererr;?></span> 
        Gender: Male <input type="radio" name="gender" id="gender" value="male"> Female <input type="radio" name="gender" id="gender" value="female">
        <br><input type="submit" value="Submit">
    </form>
</body>
</html>