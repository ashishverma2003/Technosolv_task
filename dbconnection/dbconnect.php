<?php
$host="localhost";
$user="root";
$pass="";
$database="hiringtask";
$con=mysqli_connect($host,$user,$pass,$database);
if(!$con){
    die("connection successfull");
}
else{
    echo mysqli_error($con);
}