<?php
    require 'connection.php';

    $username = $lname = $email = $dob = $phone = $addr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = htmlspecialchars($_POST['usrname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $dob = htmlspecialchars($_POST['dob']);
        $phone = htmlspecialchars($_POST['phone']);
        $addr = htmlspecialchars($_POST['addr']);
    }

    $statement = $connection->prepare("INSERT INTO student(fname,lname,email,dob,phone,addr)VALUES(?,?,?,?,?,?);");
    $statement->bind_param("ssssss",$username, $lname, $email, $dob, $phone, $addr);
    if($statement->execute()) {
        echo "New data added succesfully";
    } else {
        echo "Error";
    }
    $statement->close();
    $connection->close();
?>