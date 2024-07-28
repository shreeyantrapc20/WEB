<?php
    if(!isset($_COOKIE["username"]) && !isset($_COOKIE["email"])) {
        echo "Deleted successfully";
    }else {
        echo "Deletion unsuccessful";
    }
?>