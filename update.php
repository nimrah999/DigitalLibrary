<?php

$con = mysqli_connect('localhost','root','','bookdb');
$email = $_POST['email_id'];
$password = $_POST['password'];

$check=mysqli_query($con,"UPDATE userdetails SET password='$password' WHERE email='$email'");

if($check>0){
    echo "Data Added";
}
else{
    echo "Error";
}
?>