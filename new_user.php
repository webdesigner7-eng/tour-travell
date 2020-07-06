
<?php include 'header.php';
	session_destroy();
?>
<style>
	.background-image{
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-image: url(img/2a.jpg);
	height: 100vh;
	width: 100vw;
	position: relative;
	}
	.box{
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		width:300px;
		height:auto;
		background-color: #00000080;
		top:50%;
		left: 30%;
		transform: translate(-50%,-50%);
		position: absolute;
	}
	h1{
		color: white;
		text-align: center;
	}
	p{
		margin:0px 10px 10px;
		color:white;
	}
	.in{
		margin: 0px 10px 10px;
		width: 90%;
		border:none;
		border-bottom: 1px solid white;
		background: transparent;
		outline: none;
		height: 30px;
		color: white;
	}
	.button{
		margin:20px 15%;
		width: 70%;
		border:none;
		outline: none;
		border-radius: 20px;
	}
	.button:hover{
		cursor:pointer;
		background-color:#fb7a53 ;
		color: white;
	}
	.a{
		text-align: center;
	}
	.error{
		color: #fe7e51;
		padding: 2px 10px;
	}
	
</style>

<!-- Navigation  -->
<?php 
	$nameErr=$emailErr=$passErr="";
	$name=$email=$password="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (empty($_POST["name"])) 
		{
		    $nameErr = "Name is required";
		}else{
			$name=test_input($_POST['name']);
		}
		if (empty($_POST["email"])) 
		{
		    $emailErr = "Email is required";
		}
	   	else
	    {
		    $email = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email format";
		    }
		}
		if (empty($_POST["password"])) 
		{
		    $passErr = "Password is required";
		}else{
			$password=test_input($_POST["password"]);
		}

		if(!empty($_POST["email"]) && !empty($_POST["password"]) &&  !empty($_POST["name"]))
		{
			// Database Connection
			$con= mysqli_connect("localhost","root","");
			if(!$con)
			{
				echo "Not Connected Server";
			}
			if(!mysqli_select_db($con,"mydb"))
			{
				echo "Database not Selected";
			}
			$sql= "INSERT INTO registration(email,name,password) VALUES('$email','$name','$password')";
			mysqli_query($con, $sql);
			$con->close();
			header("refresh:2; url=index.php");
		}
		
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

<!-- image -->
<div class="background-image">
	<div class="container" >
		<div class="box">
		<form action="" method="post">	
			<h1>Sign Up</h1>
			<p>User Name</p>
			<input class="in" type="text" name="name" placeholder="Enter user name" value="<?php echo $name;  ?>">
			<?php 
				if(isset($nameErr)){
					echo "<div class='error'>".$nameErr."</div>";
				}
			?>
			<p>Email</p>
			<input class="in" type="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
			<?php
					if(isset($emailErr)){
					echo " <div class='error'>".$emailErr."</div>";
				}
			?>
			<p>Password</p>
			<input class="in"  type="Password" name="password" placeholder="Enter password" value="<?php echo $password; ?>"> 
			<?php
					if(isset($passErr)){
					echo " <div class='error'>".$passErr."</div>";
				}
			?>
			<input class="button" type="submit" value="Signup"><br>
		</form>	
		</div>
	</div>
</div>

<!--footer  -->
<?php include 'footer.php';?>

