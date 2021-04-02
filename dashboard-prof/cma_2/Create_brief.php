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
        header('Location:Create_brief.php');
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3 mb-4 ">Create Brief </h1>

    <form action="" method="POST" class="text-center p-3 mb-4 ">
        <label for="title">Add your Title:</label>
        <input class="form-control m-3" type="text" id="title" name="title" placeholder="Enter Title"><br><br>
        <label for="url">Add your Url:</label>
        <input class="form-control m-3" type="text" id="url" name="url" placeholder="Enter Url"><br><br>
        <label for=""> deadline </label>
        <input class="form-control m-3" type="date" name="deadline">
        <input class="btn btn-dark m-5 " type="submit" name="Send" value="Send">
    </form>








    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>