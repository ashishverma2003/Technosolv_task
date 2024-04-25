<?php
include 'dbconnection/dbconnect.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){

        $name= $_POST['name'] ? $_POST['name'] : '';
        $email= $_POST['email'] ? $_POST['email'] : '';
        $phone= $_POST['phone'] ? $_POST['phone'] : '';
        $subject= $_POST['subject'] ? $_POST['subject'] : '';
        $message= $_POST['message'] ? $_POST['message'] : '';

        $sql="insert into hiring(name,email,phone,subject,message) 
        values('$name','$email','$phone','$subject','$message')";
        
        if(mysqli_query($con,$sql)){
            echo "data inserted successfully";
        }else{
            echo "data not inserted".mysqli_error($con);
        }

    }
}