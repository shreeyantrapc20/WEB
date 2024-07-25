<?php
    require 'connection.php';
    $sql = "select * from student;";
    $result = $connection->query($sql);
    if($result->num_rows>0) {
        echo "
        <table border=1 cellpadding=10 cellspacing=0>
        <tr>
        <th>ID</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Phone</th>
        <th>Address</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
            
            <td>{$row['sid']}</td>
            <td>{$row['fname']}</td>
            <td>{$row['lname']}</td>
            <td>{$row['email']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['addr']}</td>
            <td><a href=' edit.php?id=".$row['sid']." '>Edit</a></td>
            </tr>";
        }
        echo "</table>";
    }
    else {
        echo "No result";
    }
    $connection->close();
?>