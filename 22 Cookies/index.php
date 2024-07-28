<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="setCookies.php" method="post">
        <label for="Username">Username</label>
        <input type="text" name="username" id="Username">
        <label for="Email">Email</label>
        <input type="text" name="email" id="Email">
        <input type="submit" value="Set Cookies">
    </form>

    <form action="deleteCookies.php" method="post">
        <input type="submit" value="Delete Cookies">
    </form>
</body>
</html>