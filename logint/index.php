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

    <form method="post" action="logincheck.php">
        <span>
            <?php if (isset($_GET['login']) && (isset($_GET["login"]) == "ko")) : ?>
            Mail or password incorrect
            <?php endif; ?>
        </span>
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>