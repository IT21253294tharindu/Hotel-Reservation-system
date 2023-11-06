<?php
   require 'config.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $massage = $_POST["massage"];

    $sql = "INSERT INTO contactus (name,email,massage)  VALUES('$name','$email','$massage')";
    if($conn->query($sql)){
        echo "<script>alert('send massage successfully!')</script>";
      
        
    }
    else{
        echo "<script>alert('ERROR: could not able to execute massage!')</script>";
        
    }
    
    
    
?>