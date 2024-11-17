<?php 
    if(isset($_COOKIE['username']) && isset($_COOKIE['email'])) {
        echo "Username: ".$_COOKIE['username'];
        echo "<br>Email: ".$_COOKIE['email'];
    } else {
        echo "No cookies found";
    }
?>