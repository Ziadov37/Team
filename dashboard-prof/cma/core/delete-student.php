<?php

require_once "database.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // check for empty data
    if(empty($id)){
        die("id is required!");
    }
    // delete form database
    $sql = "DELETE FROM students WHERE id= '".$id."'";
    $result = mysqli_query($con,$sql);
    // check for result
    if($result){
        header("location: ".BASE_URL."?s=Student deleted successfully");
    }else{
        header("location: ".BASE_URL."?e=Error! cannot delete student");
    }
}