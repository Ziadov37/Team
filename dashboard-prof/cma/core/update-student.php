<?php

require_once "database.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // check for empty data
    if(empty($id) || empty($email) || empty($password)){
        die("Empty fields!");
    }
    // update into database
    $sql = "UPDATE students SET `email` = '".$email."' , `password`= '".$password."' WHERE id=".$id." ";
    $result = mysqli_query($con,$sql);
    // check for result
    if($result){
        header("location: ".BASE_URL."?s=Student updated successfully");
    }else{
        header("location: ".BASE_URL."/update-student.php?id=".$id."&e=Error! cannot update student");
    }
}