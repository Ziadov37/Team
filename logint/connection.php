<?php
$conn = mysqli_connect('localhost', 'root', '', 'cma');
if (!$conn) {
    die("connection faild :" . mysqli_connect_error());
}