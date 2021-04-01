<?php
define("BASE_URL","http://localhost:3000/");
define('HOST',"localhost");
define('USER',"root");
define('PASSWORD',"");
define('DATABASE',"cma");

$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
if(mysqli_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}