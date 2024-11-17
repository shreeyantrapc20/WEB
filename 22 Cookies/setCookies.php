<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST["username"];
        $email = $_POST['email'];
        setcookie("username", $username, time()+(86400*7), "/");
        setcookie("email", $email, time()+(86400*7), "/");
        header("Location: displayCookies.php");
        exit();
    }
?>