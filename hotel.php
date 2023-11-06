<?php

require 'config.php';


$hotel=$_POST["Hotelname"];
$type=$_POST["Roomtype"];
$room=$_POST["Noofrooms"];
$adults=$_POST["Noofadults"];
$kids=$_POST["Noofkids"];
$arriving=$_POST["arriving"];
$closing=$_POST["closing"];

$sql="INSERT INTO books (Hotelname,Roomtype,No_of_rooms,No_of_adults,No_of_kids,arrivingdate,closingdate) VALUES ('$hotel','$type',$room,$adults,$kids,'$arriving','$closing')";
	  
if($conn->query($sql)){
    echo "<script>alert('Booking successfully!')</script>";
    header("location:y.booknow make payment.html");
  
   
    
}
else{
    echo "<script>alert('ERROR: could not able to execute booking!')</script>";
    
}
?>
