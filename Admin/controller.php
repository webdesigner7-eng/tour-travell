<?php 
	$destination= $pkg_type=$members=$days=$nights=$accomodation=$price="";
// Database Connection
	$con=mysqli_connect("localhost","root","");
	if(!$con){
		echo "Not Connected to Server";
	}
	if(!mysqli_select_db($con,"mydb")){
		echo "Not selected Database";
	}
// .......................
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	   if(isset($_POST['add_pkg']))
	   {

	   		$destination=$_POST['destination'];
	   		$pkg_type=$_POST['pkg_type'];
	   		$members=$_POST['members'];
	   		$days=$_POST['days'];
	   		$nights= $_POST['nights'];
	   		$accomodation= $_POST['accomodation'];
	   		$price= $_POST['price'];
	   		$sql="INSERT INTO `package`(`destination`, `pkg_type`, `members`, `days`, `nights`, `accomodation`, `price`) VALUES('$destination','$pkg_type','$members','$days','$nights','$accomodation','$price')";	
	   		$run=mysqli_query($con,$sql);	
	   		if(!$run)
	   		{
	   			 $msg = "error";
	   			header("location:edit_package.php?msg".$msg);
	   		}
	   		else {
	   			$msg ="Added successfully";
	   			header("location:edit_package.php?msg".$msg);
	   				
	   		}	
	   }
		// Destination controller
	   if(isset($_POST['add_destination']))
	   {
	   		$dest=$_POST["destination"];
	   		$sql="INSERT INTO `destination`(`dest_name`) VALUES ('$dest')";
	   		$run=mysqli_query($con,$sql);	
	   		if(!$run)
	   		{
	   			 $msg = "error";
	   			header("location:edit_destination.php?msg".$msg);
	   		}
	   		else {
	   			$msg = "Added successfully";
	   			header("location:edit_destination.php?msg".$msg);
	   				
	   		}	
	   }
	  
	}
	// Delete destination
	 if(isset($_GET['dest_id'])){
 		$dest_id=$_GET['dest_id'];
   		$sql="DELETE FROM destination WHERE dest_id='$dest_id'";
   		$run=mysqli_query($con,$sql);	
   		
   		if(!$run)
   		{
   			 $msg = "error";
   			header("location:edit_destination.php?msg=".$msg);
   		}
   		else {
   			$msg ="Deleted successfully";
   			header("location:edit_destination.php?msg".$msg.$dest_id);	
   		}
   	}
   // Delete package

    if(isset($_GET['pkg_id'])){
 		$pkg_id=$_GET['pkg_id'];
   		$sql="DELETE FROM package WHERE pkg_id='$pkg_id'";
   		$run=mysqli_query($con,$sql);	
   		if(!$run)
   		{
   			 $msg = "error";
   			header("location:edit_package.php?msg=".$msg);
   		}
   		else {
   			$msg ="Deleted successfully";
   			header("location:edit_package.php?msg".$msg.$pkg_id);	
   		}
   }
   // update destination
   if(isset($_POST['d_id'])){
	   		$sql = "SELECT dest_name FROM destination WHERE dest_id='".$_POST['d_id']."'";
	   		$result = mysqli_query($con,$sql);
	   		$row = mysqli_fetch_array($result);
	   		$output ="";
	   		$output.="<input type='text' name='dest_name' value='".$row['dest_name']."' required='required'><br>";
	   		 $output.="<input type='hidden' name='id' value='".$_POST['d_id']."'>";
	   		echo $output;
	 }
	 if (isset($_POST['edit_dest_btn'])){

	 	$id = $_POST['id'];
	 	$name= $_POST['dest_name'];
	 	$sql="UPDATE `destination` SET `dest_name`='".$name."' WHERE dest_id='".$id."'";
   		$run = mysqli_query($con,$sql);
   		if(!$run)
   			alert("Error");
   		else
   		{	header("location:edit_destination.php");
   			alert("successfully");
   		}
   			
	 }
   // update package
	if(isset($_POST['p_id'])) {
		$sql="SELECT * FROM package WHERE pkg_id='".$_POST['p_id']."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$output="";
		$output.="<label>Destination</label><input type='text' name='m_dest_name' required='required' value='".$row['destination']."'><br>";
		$output.="<label>Package-type</label><select name='m_pkg_type' value='".$row['pkg_type']."'>
						<option value='Family package'>Family</option>
						<option value='Couple package'>Couple</option>
						<option value='Single package'>Single</option>
					</select><br>";			
		$output.="<label>Members</label><input type='text' name='m_members' required='required' value='".$row['members']."'><br>";
		$output.="<label>Days</label><input type='number' name='m_days' required='required' value='".$row['days']."'><br>";
		$output.="<label>Nights</label><input type='number' name='m_nights' required='required' value='".$row['nights']."'><br>";
		$output.="<label>Accomodation</label><select name='m_accomodation' value='".$row['accomodation']."'>
										<option value='With Accomodation'>With Accomodation</option>
										<option value='Without Accomodation'>Without Accomodation</option>
									</select><br>";
		$output.="<label>Price</label><input type='text' name='m_price' required='required' value='".$row['price']."'><br>";	
		$output.="<input type='hidden' name='id' value='".$row['pkg_id']."'>"	;					
		echo $output;
	}
	if(isset($_POST['edit_btn_pkg'])){
		$sql="UPDATE `package` SET `destination`='".$_POST['m_dest_name']."',`pkg_type`='".$_POST['m_pkg_type']."',`members`='".$_POST['m_members']."',`days`='".$_POST['m_days']."',`nights`='".$_POST['m_nights']."',`accomodation`='".$_POST['m_accomodation']."',`price`='".$_POST['m_price']."' WHERE pkg_id='".$_POST['id']."'";
		$run=mysqli_query($con,$sql);
		if(!$run)
   			alert("Error");
   		else
   		{	$msg="Updated successfully";
   			header("location:edit_package.php?".$msg);
   		}
	}

//End 
?>