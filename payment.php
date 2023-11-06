<?php
require 'config.php';

$name=$_POST["name"];
$cardno=$_POST["cardno"];
$cardtype=$_POST["cardtype"];
$expiredate=$_POST["date"];
$fee=$_POST["fee"];

$sql="INSERT INTO payment (cname,cardno,cardType,expiredate,fee) VALUES ('$name',$cardno,'$cardtype','$expiredate',$fee)";

if($conn->query($sql)){
    echo "<script>alert('booking successfully!')</script>";
  
    
    
}
else{
    echo "<script>alert('ERROR: could not able to execute booking!')</script>";
    
}



?>