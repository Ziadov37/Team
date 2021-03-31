<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST">
        <label for="email">Email</label><br>
        <input type="mail" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>