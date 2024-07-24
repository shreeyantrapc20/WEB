<?php
    require 'connection.php';

    $username = $lname = $email = $dob = $phone = $addr = $id = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = htmlspecialchars($_POST['sid']);
        $username = htmlspecialchars($_POST['usrname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $dob = htmlspecialchars($_POST['dob']);
        $phone = htmlspecialchars($_POST['phone']);
        $addr = htmlspecialchars($_POST['addr']);
    

    $sql = "UPDATE student SET fname='$username', lname='$lname', email='$email',dob='$dob', phone='$phone', addr='$addr' WHERE sid=$id";
    if($connection->query($sql) === TRUE) {
        echo "Updated successfully";
    }else {
        echo "Unsuccessful";
    }
}
    
    $connection->close();
?>