
<!-- Header -->
<?php include 'header.php';
	include 'validation.php';
 
 	if(!isset($_SESSION['email']))
 		header("location:login.php");
 ?>

<style>
.background-image{
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-image: url(img/a2.jpg);
	height: 100%;
	width: 100vw;
}
.input{
	width: 90%;
	margin: 2px 10px;
	padding:2px 10px;
	border-radius: 20px;
}
.file{
	margin: 2px 10px;
	padding:2px 10px;
	border-radius: 20px;
}
h3{
	font-family:serif;
	text-align: center;
	padding: 20px;
	color: white;
}
.ctbody{
	margin-bottom: 100px;
}
.button{
	margin:20px 30%;
	width: 40%;
	border:none;
	outline: none;
	border-radius: 20px;
}
.button:hover{
	cursor:pointer;
	background-color:#fb7a53 ;
	color: white;
}
.error{
	color: #fe7e51;
	padding: 2px 10px;
}
#addMember{
	color:black;
	width: 20%;
}

th{
	color: white;
}
@media screen and (max-width: 480px)
{

}
</style>
<!-- booking -->
<div class="background-image">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="text-center" style="color: black;">Booking Details</h3>
				<form action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<i><b>Name</b></i>
						<input class="input" type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
								<?php 
						if(isset($name)){
							echo " <div class='error'>".$nameErr."</div>";
						}
						?>
					</div>
					<div class="col-md-6">
						<i><b>Email</b></i>
						<input class="input" type="text" name="email" placeholder="Email" value="<?php echo $email ; ?>">
					<?php 
						if(isset($email)){
							echo " <div class='error'>".$emailErr."</div>";
						}
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<i><b>Contact</b></i>
						<input class="input" type="number" name="contact" placeholder="Contact" value="<?php echo $contact; ?>">
					<?php 
						if(isset($contact)){
							echo " <div class='error'>".$contactErr."</div>";
						}
						?>
					</div>
					<div class="col-md-6">
						<i><b>Address</b></i>
						<input class="input" type="text" name="address" placeholder="Address" value="<?php echo $address; ?>">
					<?php 
						if(isset($address)){
							echo " <div class='error'>".$addressErr."</div>";
						}
						?>
					</div>

				</div>
				<div class="row">
					<div class="col-md-6">
						<i><b>Dob</b></i>
						<input class="input" type="date" name="dob" placeholder="DOB" value="<?php echo $dob;?>">
					<?php 
						if(isset($dob)){
							echo " <div class='error'>".$dobErr."</div>";
						}
						?>
					</div>
					<div class="col-md-6">
						<i><b>Gender</b></i><br>
						<input type="radio" name="gender" <?php if (isset($gender) && $gender=='Female') echo "checked";?> value="Female">Female
				 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=='Male') echo "checked";?> value="Male">Male
				 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=='Other') echo "checked";?> value="Other">Other
				 <?php 
						if(isset($gender)){
							echo " <div class='error'>".$genderErr."</div>";
						}

						?>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-6">
						<i><b>Package</b></i>
						<select class="input" name="package">
						<option value="Family">Family</option>
						<option value="Special">Special</option>
						<option value="None">None</option>
					</select>
					</div>
					<div class="col-md-6">
						<i><b>Destination</b></i>
						<select class="input" name="destination">
						<option value="Malesia ">Malesia</option>
						<option value="Thailand">Thailand</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Shri-lanka">Shri-lanka</option>
						<option value="Nepal">Nepal</option>
					</select>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-6">
						<i><b>Aadhar card</b></i>
						<input class="file" type="file" name="a_proof" id="Aadhar" value="<?php echo $a_proof; ?>">
					</div>
					<div class="col-md-6">
						<i><b>Pan card(optional)</b></i>
						<input class="file" type="file" name="p_proof" id="pan" value="<?php echo $p_proof; ?>">
					</div>
					<?php 
						if(isset($a_proof)){
							echo " <div class='error'>".$id_proofErr."</div>";
						}
						?>
				</div>
				
				<div class="row">
					<input type="submit" name="submit" value="submit" class="button"/>
				</div>
				</form>	
				<!-- New ADdMember -->
					
				<a href="" id="addMember">Add Members</a>
				<div class="row">
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>DOB</th>
								<th>Gender</th>
								<th>Relation</th>
							</tr>
						</thead>
						<tbody class="add-mem">
						<tr><td><input type='text' name='name1' placeholder='Name'></td>
							<td><input type='date' name='dob1' ></td>
							<td><select name='gender1'>
								<option value='Male'>Male</option>
								<option value='Female'>Female</option>
								<option value='Other'>Other</option>
							</select></td>
							<td>
								<select name='relation1'>
								<option value='Mother'>Mother</option>
								<option value='Father'>Father</option>
								<option value='Sister'>Sister</option>
							</select>
							</td>
							<td><button class='remove'>-</button></td>
						</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>
</div>
<!-- Footer -->
<?php include 'footer.php'; ?>
<script>
	var html= "<tr><td><input type='text' name='name1' placeholder='Name'></td><td><input type='date' name='dob1' ></td><td><select name='gender1'><option value='Male'>Male</option><option value='Female'>Female</option><option value='Other'>Other</option></select></td><td><select name='relation1'><option value='Mother'>Mother</option><option value='Father'>Father</option><option value='Sister'>Sister</option></select></td><td><button class='remove'>-</button></td></tr>";

	$(function(){
		$('#addMember').click(function(){
			$('tbody.add-mem').append(html);
		});
		$(document).on('click','.remove',function(){
			$(this).parents('tr').remove();
		});
	});
</script>