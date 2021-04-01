<?php
require_once "conn.php";

if (isset($_POST['Send'])) {
    echo 'send cor';
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if (!empty($_POST['title']) && !empty($_POST['url'])) {
        $title = $_POST['title'];
        $url =  $_POST['url'];
        $deadline = $_POST['deadline'];
        // session_start();
        $proofId = 1; //$_SESSION['proof-id'] = ?;
        $query = "INSERT INTO `brief` ( title, description,createdat,deadline,idproof) VALUES ('$title', '$url',CURDATE(),'$deadline','$proofId')";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        header('Location:index.php');
    } else {
        echo 'Error';
        var_dump($_POST);
    }
}









?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>Create Brief </h1>

    <form action="" method="POST">
        <label for="title">Add your Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter Title"><br><br>
        <label for="url">Add your Url:</label>
        <input type="text" id="url" name="url" placeholder="Enter Url"><br><br>
        <label for=""> deadline </label>
        <input type="date" name="deadline">
        <input type="submit" name="Send" value="Send">
    </form>
</body>

</html>