<?php
require 'config.php';

$Firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["gender"];
$mobilenumber=$_POST["mobilenumber"];
$passportno=$_POST["passportno"];
$email=$_POST["email"];
$address=$_POST["address"];
$DOB=$_POST["day"];
$username=$_POST["username"];
$password=$_POST["password"];


$sql="INSERT INTO user (firstname,lastname,gender,mobileno,passportno,email,addres,DOB,username,passwod) VALUES ('$Firstname','$lastname','$gender',$mobilenumber,$passportno,'$email','$address','$DOB','$username','$password')";

if($conn->query($sql)){
    echo "<script>alert('Registration successfully!')</script>";
  
    header("location:login.php");
    
}
else{
    echo "<script>alert('ERROR: could not able to execute registration!')</script>";
    
}

?>