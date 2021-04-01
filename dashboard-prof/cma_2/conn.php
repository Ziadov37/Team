<?php
$con = mysqli_connect('localhost',  'root',  '',  'cma');
if (mysqli_connect_errno()) {
    echo 'erreur de connexion : ' . mysqli_connect_error();
    die();
}
