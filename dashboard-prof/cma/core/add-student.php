<?php

require_once "database.php";

if(isset($_POST['add'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // check for empty data
    if(empty($email) || empty($password)){
        die("Empty fields!");
    }
    // insert into database
    $sql = "INSERT INTO students (`email`,`password`) VALUES ('".$email."','".$password."')";
    $result = mysqli_query($con,$sql);
    // check for result
    if($result){
        header("location: ".BASE_URL."?s=Student added successfully");
    }else{
        header("location: ".BASE_URL."?e=Error! cannot add student");
    }
}else{
    echo "You don't have direct access to this page!";
}