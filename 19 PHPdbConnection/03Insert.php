<?php

    require "01databaseConnection.php";

    $sql = "INSERT INTO student 
        (fname, lname, email, dob, phone, addr) 
        VALUES('binayak', 'niraula', 'binayak@abc.com', '2000-02-12', '9800000000', 'Shivasatakshi');";

    if($connection->query($sql) === TRUE) {
        echo "Inserted successfully";
    } else {
        echo "Error: ".$sql."<br>".$connection -> error;
    }
    $connection->close();

?>