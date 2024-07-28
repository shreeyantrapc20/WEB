<?php
    if(isset($_COOKIE['username'])) {
        setcookie("username", "", time()-(3600), "/");
    }
    if(isset($_COOKIE['email'])) {
        setcookie("email", "", time()-(3600), "/");
    }
    header("Location: confirmDelete.php");
    exit();
?>