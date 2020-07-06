<?php
	include "validation.php";
	
?>
<style>

.background-image{
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-image: url(img/a6.jpg);
	height: 100vh;
	width: 100vw;	
	color: white;
}
.table{
	background-color:#ede0e090;
}
</style>
<!-- Header -->
 <?php include 'header.php';?>
 <!-- body -->
<div class="background-image">
	 <div class="container">
	 	<div class="row text-center">
	 		<div class="offset-md-2 col-md-8">
	 		<h1 class="heading">Booking Done</h1>
	 			<p class="ticket"> Ticket</p><hr>
	 			<?php 
	 				
					// $email=$_SESSION['email'];

					$sess=$_SESSION['email'];
				    $sql = " SELECT * FROM `booking_details` WHERE id =(SELECT MAX(id) FROM booking_details WHERE email='$sess') ";
				    $result = mysqli_query($con, $sql);
					while($row=mysqli_fetch_array($result))
	 				{
	 			?>
	 			<table class="table">
	 				<tr>
	 					<td style="width:25%;">Ticket No.</td>
	 					<td><?php echo 'ST&T000'.$row['id']; ?>	</td>
	 				</tr>
		 			<tr>
		 				<td >Name :</td>
		 				<td><?php echo $row['name'];?></td>
		 			</tr>
		 			<tr>
		 				<td>Email :</td>
		 				<td><?php echo $row['email'];?></td>
		 			</tr>
		 			<tr>
		 				<td>Contact :</td>
		 				<td><?php echo $row['contact'];?></td>
		 			</tr>
		 			<tr>
		 				<td>Address :</td>
		 				<td><?php echo $row['address'];?></td>
		 			</tr>
		 			<tr>
		 				<td>Dob :</td>
		 				<td><?php echo $row['dob'];?></td>
		 			</tr>
		 			<tr>
		 				<td>Gender :</td>
		 				<td><?php echo $row['gender'];?></td>
		 			</tr><tr>
		 				<td>Package :</td>
		 				<td><?php echo $row['package'];?></td>
		 			</tr><tr>
		 				<td>Destination :</td>
		 				<td><?php echo $row['destination'];?></td>
		 			</tr>
		 			<!-- 
						<tr>
		 				<td>Id proof:</td>
		 				<td><?php echo $row['aadhar_card'];?></td>
		 			</tr>
		 			 -->
		 			<tr>
		 				<td>Prize :</td>
		 				<td>7000</td>
		 			</tr>
	 			</table>
	 			<div class="btn btn-success">Done</div>
	 			<div class="btn btn-success">print</div>
	 			<?php
	 				}
	 				$con->close();
	 			?>	
	 		</div>	
	 	</div>
	 </div>
</div>	 
 <!-- footer -->
 <?php include 'footer.php';?>
  