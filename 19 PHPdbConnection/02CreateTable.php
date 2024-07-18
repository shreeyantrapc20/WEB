<?php

    require "01databaseConnection.php";

    $sql = "CREATE TABLE STUDENT (
        sid INT PRIMARY KEY AUTO_INCREMENT,
        fname VARCHAR(255) NOT NULL,
        lname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        dob DATE, 
        phone VARCHAR(255) NOT NULL,
        addr VARCHAR(255) NOT NULL );";

    if($connection->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error: ".$sql."<br>".$connection -> error;
    }
    $connection->close();

?>