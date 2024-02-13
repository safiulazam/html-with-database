<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['mobile'];
$password=$_POST['password'];
$con=new mysqli('localhost','root','','form');
    if($con){
        $sql="insert into `data`(name,email,gender,mobile,password) values('$username','$email','$gender','$phone','$password')";
        $execute=mysqli_query($con,$sql);
        if($execute){
            echo "Database Created";
        }else{
            die(mysqli_error($con));
        }
    }else{
        die(mysqli_error($con));
    }
}


?>