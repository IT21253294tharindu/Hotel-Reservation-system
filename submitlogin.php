<?php
require 'config.php';

$username=$_POST["username"];
$password=$_POST["password"];


$sql="SELECT* FROM user WHERE username='$username' and passwod='$password'";

$result=$conn->query($sql);

if($result->num_rows > 0) 
{
    echo "<script>alert('login successfull')</script>";
     header("location:loginindex.html");
}
else{
    echo "<script>alert('invalid username or password!')</script>";
    
    
    
}

?>