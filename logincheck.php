<?php
include_once('connection.php');

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM `prof` WHERE email='$email' && password='$password'";
    $login = mysqli_query("$conn", "$query");

    $count = mysqli_num_rows($login);

    if ($count > 0) {
        header('Location:index.php');
    } else {
        echo "Your password incorect";
    }
}