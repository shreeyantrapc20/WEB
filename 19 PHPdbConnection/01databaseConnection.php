<?php 

    $serverName = "localhost" ;
    $username= "root";
    $password="";
    $dbName="binayak";

    //creating connection
    $connection = new mysqli($serverName, $username, $password, $dbName);

    //check connection
    if($connection -> connect_error) {
        die("Connection failed ". $connection -> connect_error);
    }

    echo "Connected to database successfully";



?>