<?php 

require 'connection.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from student where sid=$id";
    $result = $connection->query($sql);
    if($result->num_rows>0) {
        $row = $result->fetch_assoc();
?>


<form action="update.php" method="POST" >

<label for="username">Firstname</label>
<input type="text" name="usrname" value="<?php echo $row['fname'] ?>"> <br><br>
<label for="lname">Lastname</label>
<input type="text" name="lname" value="<?php echo $row['lname'] ?>" > <br><br>
<label for="email">Email</label>
<input type="text" name="email" value="<?php echo $row['email'] ?>"> <br><br>
<label for="DOB">DOB</label>
<input type="text" name="dob" value="<?php echo $row['dob'] ?>"><br><br>
<label for="phone">Phone</label>
<input type="text" name="phone" id="phone" value="<?php echo $row['phone'] ?>"><br><br>
<label for="addr">Address</label>
<input type="text" name="addr" id="addr" value="<?php echo $row['addr'] ?>"><br><br>
<input type="submit" value="Submit">
<button type="button"><a href="select.php">View Data</a></button>


</form>
<?php
   }else {
    echo "Record not found";
   }
}else {
    echo "Invalid Request";
}
$connection->close();
?>