
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web Assignment</title>
	<meta charset="UTF-8"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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