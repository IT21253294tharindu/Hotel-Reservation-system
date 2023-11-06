<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELS | ONLINE HOTEL BOOKINGS</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="styles3.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://kit.fontawesome.com/b60a2ded9f.js"></script>
	<script type="text/javascript"></script>
    <script src="js/myscript.js"></script>
    <script src="js/myscript3.js"></script>
	
    
</head>
<body>
    
    <header class="header">
        <a href="y.index.html" id="logo"><img src="imgaes/Hlogo.png" alt=""></a>
        <nav class="navbar">
            <a href="y.index.html">Home</a>
            <a href="#">Login</a>
            <a href="http://localhost/Hotels/src/yugantha/src/signup.php">Sign Up</a>
            <a href="about.html">About</a>
            <a href="contact us.html">contact</a>
        </nav>
        <div class="icons">
            
			
            <div class="fas fa-search" id="serach-bar"></div>
            <div class="fas fa-user" id="myuser"></div>
            <div class="fas fa-bars" id="menu-bars"></div>
        </div>

        <div class="search-box">
            <input type="search" placeholder="search here">
        </div>
		
	<div class="sidebar">
	<center><h3>Menu</h3></center>
	   <ul>
	     <li><a href="">Reviews</a></li>
		 <li><a href="">Location</a></li>
		 <li><a href="">Gallery</a></li>
	   </ul>
	   <button class="sidebarBtn">
	     <span></span>
	   </button>
	</div>
        
    </header>

    

	
<!-- background image -->
<?php
    $c=date("Y-m-d");

    echo "<center><h2>$c</h2></center>";
   ?>
    <div class="main-background">
   
     

 <form id="form1" onsubmit="return checkPassword()" method="post" action="submitlogin.php" >
 
    <h2 style="background-color:black; background-image:linear-gradient(black,purple);"><center>Login</center></h2><br/>
   <center>username:<br/>
   <input type="text" name="username" required></center><br/>
    

   <center> Password:<br/>
    <input type="password" name="password" id="psw"  and uppercase and lowercase letter,and at least 5 and maximum 10 characters)</center><br><br/>
    
     
   
<center>
  <input type="submit" id="submitbtn" value="submit" >
</center>




   
</form>
   
        
    </div> 
	<br>
    <!-- background image ended -->
	
	



<!-- footer -->
<footer>
	<div class="row">
	      <div class="col">
		    <img src="imgaes/hotellogo.png" alt="logo" width = "80px" height = "60px">
			<p>
		    Sri Lanka offers beautiful nature, sights and relaxation on long beaches, as well as breathtaking views and locations in the mountains, which might even surprise you.
			Our hotel is located in one of these areas. You can relax and enjoy the lovely views in a pleasant climate directly from the terraces of our hotel rooms and the hotel restaurant.
		    </p>
		  </div>
		  <div class="col">
		    <h3></h3>
			<p>05 colombo Road</p>
			<p>Pitakotuwa, World Trade Center</P>
			<p>Colombo, Sri Lanka Postal code 00500</P>
			<p class="email-id">infohotels@gmail.com</P>
			<h4>+94-767903153</h4>
		  </div>
		 
		  <div class="social-icons">
		      <ul>
		        <i class="fa-brands fa-facebook"><a href=""> Facebook</a></i><br><br>
                <i class="fa-brands fa-twitter"><a href=""> Twitter</a></i><br><br>
			    <i class="fa-brands fa-instagram"><a href=""> Instagram</a></i><br><br>
			    <i class="fa-brands fa-whatsapp"><a href=""> Whatsapp</a></i>
		      </ul>
		  </div>
		 
		  <div class="col">
			<img src="imgaes/QR.png" alt="logo" width = "200px" height = "200px">
		  </div>
	</div>
	<br>
	<hr>
	   <p class="copyright">Created by 8.2 Group 01</p>
</footer>

    <script src="script.js"></script>
</body>
</html>