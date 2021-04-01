<?php
include_once('connection.php');

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM proof WHERE email='" . $email . "' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row["password"] == $password) {
            header('Location:index.php?proof=ok');
        } else {
            header('Location:index.php?login=ko');
        }
    } else {
        $query = "SELECT * FROM students WHERE email='" . $email . "' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row["password"] == $password) {
                header('Location:index.php?student=ok');
            } else {
                header('Location:index.php?login=ko');
            }
        } else {
            header('Location:index.php?login=ko');
        }
    }
}



// if (isset($_POST["submit"])) {
//     $email =  $_POST['email'];
//     $password =  $_POST['password'];
//     $query =  "SELECT * FROM `users` WHERE email='$email' && password='$password'";
//     $login = mysqli_query($conn, $query);
//     if (mysqli_num_rows($login) > 0) {
//         header('Location:dashboardt/index.php');
//     } else {
//         echo "Your password incorect";
//     }
// }