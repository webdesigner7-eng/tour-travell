
<!-- Navigation  -->
<?php include 'header.php';?>
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
		height:400px;
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
		background-color:#fb7a53;
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
<?php
	//$name=$contact=$address=$dob=$gender=$package=$destination=$a_proof=$p_proof="";
	
	$emailErr=$passErr=$sessionErr="";
	$email=$password="";
	if ($_SERVER["REQUEST_METHOD"]== "POST") 
	{
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
		}
		else{
			$password = test_input($_POST['password']);
		}

		if(!empty($_POST["email"]) && !empty($_POST["password"]) )
		{
			$con= mysqli_connect("localhost","root","");
			mysqli_select_db($con,"mydb");
			$sql="SELECT * FROM registration WHERE email=? and password=?";
			$stmt= mysqli_stmt_init($con);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				$msg="Information Not enter";
				header("location:login.php?msg=".$msg);
			}
			else{
				mysqli_stmt_bind_param($stmt,"ss",$email,$password);
				mysqli_stmt_execute($stmt);
				$result =mysqli_stmt_get_result($stmt);
				$count=mysqli_num_rows($result);
				if($count==1){
					$_SESSION['email']=$email;
					header("location:booking.php");
				}
				else{
					$msg="Email and password credential is wrong";
				}
			}
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
			<!-- form -->
			<form action="" method="post">	
				<h1>Login</h1>
				<?php
					if(isset($_SESSION['email']))
						echo "<h4 style='color:#fe7e51'>"."you are already logged in"."</h4>";

				?>
				<p>Email </p>
				<input class="in" type="email" name="email" placeholder="Enter email" 
				value="<?php echo $email;?>">
				<?php 
					if(isset($emailErr)){
						echo " <div class='error'>".$emailErr."</div>";
					}
				?>
				<p>Password</p>
				<input class="in"  type="Password" name="password" placeholder="Enter password" >
				<?php 
					if(isset($passErr)){
						echo " <div class='error'>".$passErr."</div>";
					}

					if(isset($msg)){
						echo "<div class='error'>".$msg."</div>";
					}
				?>

				<input class="button" type="submit" value="Login" name='login'><br>
				<!-- <button class="btn" name="login" type="submit">Login</button> -->
				<p class="a"><a style="color: white" href="new_user.php">Signup/New User?</a></p>
			</form>	

		</div>
	</div>
</div>	
<!--footer  -->
<?php include 'footer.php';?>

