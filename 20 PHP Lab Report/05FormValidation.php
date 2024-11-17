<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php 

//defining variables
$username = "";
$email = "";
$age = 0;
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //assign variables
    $username = $_POST['usrname'];
    $email = $_POST['uemail'];
    $age = $_POST['uage'];

    //validating if input fields are empty

    if(empty($username) || empty($email) || empty($age)) {
        $errorMessage = "Input fields cannot be empty!";
    } else {

        //validate username length
        if(!validateLength(strlen($username), 5, 20) ) {
            $errorMessage = "Username should be between 5 to 20 characters";
        
        } 
            //validating username pattern
        if(!preg_match("/^[a-zA-Z]*$/", $username)) {
            
            $errorMessage = "Illegal characters in username";
        }

        //validating email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "Invalid email";
        }

        //validating age
        if(!filter_var($age, FILTER_VALIDATE_INT)) {
            $errorMessage = "Invalid age";
        } else if(!validateLength($age, 18, 45)) {
            $errorMessage = "Age should be between 18 and 45.";
        }


    }
}


function validateLength($currentLength, $min, $max) {
    if( $currentLength >= $min && $currentLength <= $max ) {
        return true;
    } else {
        return false;
    }
}



?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <span><?php echo $errorMessage; ?></span> <br><br>
        <label for="username">Username</label> 
        <input type="text" name="usrname" id="username" value="<?php echo $username; ?>"> <br><br>
        <label for="email">Email</label>
        <input type="text" name="uemail" id="email" value="<?php echo $email; ?>" > <br><br>
        <label for="age">Age</label>
        <input type="text" name="uage" id="age" value="<?php echo $age; ?>" > <br><br>
        <input type="submit" value="Register">

    </form>
</body>
</html>