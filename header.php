<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web Assignment</title>
	<meta charset="UTF-8"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    	.header{
    		width: 100%;
    		/*height: 10%;*/
    	}
    	@media screen and (max-width: 480px){
    		.header{
    			height:10%;
    		}
    	}
    	ul.navbar-nav li a{
    		color:white!important;
    	}
    	ul.navbar-nav li a:hover{
    		cursor:pointer;
    		color: blue;
    		font-size: 14pt;
    	}
    </style>
</head>
<body style="overflow-x: hidden;">
<?php
	// Database Connection
		$con=mysqli_connect("localhost","root","");
		if(!$con){
			echo "Not Connected to Server";
		}
		if(!mysqli_select_db($con,"mydb")){
			echo "Not selected Database";
		}
?>	
<nav class="navbar navbar-expand-sm navbar-light bg-dark sticky-top text-white">

	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu"> 
		<span class="navbar-toggler-icon"></span>
	</button>

  	<div class="collapse navbar-collapse" id="mymenu">
		<ul class="navbar-nav " >
			<li class="nav-item">
				<h1 style="text-align: left; font-family: serif;color:white;">Sujata Tour & Travell</h1>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto" >	
			<li class="nav-item">
				<p><a class="nav-link" href="index.php">Home</a></p>
			</li>
			<li class="nav-item">
				<p><a class="nav-link" href="package.php">Package</a></p>
			</li>
			<li class="nav-item">
				<p><a class="nav-link" href="destination.php">Destination</a></p>
			</li>
			<li class="nav-item">
				<p><a class="nav-link" href="booking.php">Booking</a></p>
			</li>
			<li class="nav-item">
				<p><a class="nav-link" href="about.php">About us</a></p>
			</li>
			<li class="nav-item">
				<p><a class="nav-link" href="contact.php">Contact us</a></p>
			</li>
			<!-- <li class="nav-item">
				<p><a class="nav-link" href="demo.php">Demo</a></p>
			</li> -->
			
			<li class="nav-item">
				<?php
					session_start();
					$email=$password="";
					if(!empty($_SESSION))
					{
				?>
				<p><a class="nav-link" href="logout.php">Logout</a></p>
				<?php 
					}else{
				?>
				<p><a class="nav-link" href="login.php">Signup/Login</a></p>
				<?php
						}
				?>

			</li>
		</ul>
	</div>	

</nav>	
