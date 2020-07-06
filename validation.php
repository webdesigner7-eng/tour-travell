<?php
	$name=$email=$contact=$address=$dob=$gender=$package=$destination=$a_proof=$p_proof="";
	$nameErr=$emailErr=$contactErr=$addressErr=$dobErr=$genderErr=$packageErr=$destinationErr=$id_proofErr="";
	$flag=0;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	//1 name
		if (empty($_POST["name"]))
		{
		    $nameErr = "Name is required";
		} 
		else {
		    $name = test_input($_POST["name"]);
		    $flag =1;
		    // check if name only contains letters and whitespace
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		      $nameErr = "Only letters and white space allowed";
		    }
		}
		//2 email
		if(empty($_POST["email"]))
		{
			$emailErr = "Email is required";
		}
		else{
			$email = test_input($_POST["email"]);
		    $flag =1;

		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email format";
		    }
		}
		//3 contact
		if(empty($_POST["contact"]))
		{
			$contactErr = "Contact is required";
		}
		else{
			$contact = test_input($_POST["contact"]);
		    $flag =1;

		    // check if e-mail address is well-formed
		    if (strlen($contact) !=10 && !filter_var($contact,FILTER_VALIDATE_INT)) {
		      $emailErr = "Invalid email format";
		    }
		}
		//4 Address
		if(empty($_POST["address"]))
		{
			$addressErr = "address is required";
		}
		else{
		    $flag =1;

			$address = test_input($_POST["address"]);
		    // check if e-mail address is well-formed
		 
		}
		//5 Dob
		if(empty($_POST["dob"]))
		{
			$dobErr = "dob is required";
		}
		else{
		    $flag =1;

			$dob = test_input($_POST["dob"]);
		    // check if e-mail address is well-formed
		 	// if($dob>$date('Y'))
		 	// 	$dobErr= "Invalid date";
		}
		//6 gender
		if(empty($_POST["gender"]))
		{
			$genderErr = "gender is required";
		}
		else{
		    $flag =1;
			$gender = test_input($_POST["gender"]);
		}
		//7 package
		if(empty($_POST["package"]))
		{
			$packageErr = "package is required";
		}
		else{
		    $flag =1;
			$package = test_input($_POST["package"]);
		}
		//8 destination
		if(empty($_POST["destination"]))
		{
			$destinationErr = "destination is required";
		}
		else{
		    $flag =1;
			$destination=test_input($_POST["destination"]);
		}
		//9 id_proof
		if(empty($_POST["a_proof"]))
		{
			$id_proofErr = "file is required";
		}
		else{
		    $flag =1;
			$a_proof = $_FILES["a_proof"]["name"];
		    print_r($a_proof);
		}
		
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['address']) && !empty($_POST['gender']) && !empty($_POST['dob']) && !empty($_POST['package']) && !empty($_POST['destination']) )
		{
			/*Database Connection */
			$con= mysqli_connect("localhost","root", "");
			if(!$con){
				echo "Not Conected to server";
			}
			if(!mysqli_select_db($con,"mydb")){
				echo "Not Selected Database";
			}
			
			$tmpimage=$_FILES['a_proof']['temp_a'];
			$folder ="id proof";
			$target_file=$folder.'/'.basename($_FILES['a_proof']['name']);
			move_uploaded_file($tmpimage, $target_file);
			
			// Before booking checking login(prepare statement)

			$sqli="SELECT * FROM registration WHERE email=?";
			$stmt= mysqli_stmt_init($con);
			mysqli_stmt_prepare($stmt,$sqli);
			mysqli_stmt_bind_param($stmt,"s",$email);
			mysqli_stmt_execute($stmt);
			$result =mysqli_stmt_get_result($stmt);
			$count=mysqli_num_rows($result);
			if($count==0)
			{
				header('location:new_user.php');
			}
			else
			{
				// Inserting details
				$sql="INSERT INTO booking_details(name,email,contact,address,dob,gender,package,destination,aadhar_card) VALUES('$name','$email','$contact','$address','$dob','$gender','$package','$destination','$a_proof')";
				mysqli_query($con,$sql);
				$con->close();
				header("location:final.php");
			}
		}
		else{
			echo "Error************************";
		}
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>