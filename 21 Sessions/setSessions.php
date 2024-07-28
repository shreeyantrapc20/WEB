<?php 
    session_start();
    $_SESSION['username'] = 'Binayak';
    if(isset($_SESSION['username'])) {
        echo "Session set successfully";
    } else {
        echo "Welcome Guest";
    }
?>