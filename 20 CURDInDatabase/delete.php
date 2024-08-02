<?php 

    require 'connection.php';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM student WHERE sid=$id";
        echo "<button><a href='select.php'>View table</a></button>";
        if($connection->query($sql) === TRUE) {
            echo "Deleted successfully";
        } else {
            echo "Delet unsuccessful";
        }

    }
?>