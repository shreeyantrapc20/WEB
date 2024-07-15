<?php 
    
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $uname = htmlspecialchars($_POST['user']);
            $email = htmlspecialchars($_POST['email']);
            
            echo "Username: ".$uname." Email: ".$email;
        }
    
    
    ?>