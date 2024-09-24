<?php


$hsot  = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'java';

$conn = mysqli_connect($hsot,$user,$pass,$db_name);

if ($conn){
    echo "sei connesso";
}else{

    die('Non connesso'.mysqli_error($conn));
}