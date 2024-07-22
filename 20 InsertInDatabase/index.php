<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="POST" >

        <label for="username">Firstname</label>
        <input type="text" name="usrname"> <br><br>
        <label for="lname">Lastname</label>
        <input type="text" name="lname"> <br><br>
        <label for="email">Email</label>
        <input type="text" name="email"> <br><br>
        <label for="DOB">DOB</label>
        <input type="text" name="dob"><br><br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone"><br><br>
        <label for="addr">Address</label>
        <input type="text" name="addr" id="addr"><br><br>
        <input type="submit" value="Submit">
        <button type="button"><a href="select.php">View Data</a></button>


    </form>
</body>
</html>