<?php 

require "connection.php";
$sql = "UPDATE student SET fname='Abiral', lname='Khatiwada', email='ak47@abiral.com',dob='2059-01-01', phone='9876543210', addr='Budhabare' WHERE sid=2";
if($connection->query($sql) === TRUE) {
    echo "Updated successfully";
}else {
    echo "Unsuccessful";
}
$connection->close();
?>