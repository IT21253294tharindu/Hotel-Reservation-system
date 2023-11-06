<?php	

require 'config.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$Feedback = $_POST['Feedback'];
	
 
	$sql = "INSERT INTO feedback (Firstname,Lastname,Feedback) VALUES('$fname','$lname','$Feedback')"; 
	
	if($conn->query($sql)){
		echo "<script>alert('feedback send successfully!')</script>";
	  
	
		
	}
	else{
		echo "<script>alert('ERROR: could not able to execute feedback!')</script>";
		
	}


?>