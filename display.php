<?php include 'header.php';?>
<style>
	.background-image{
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
background-image: url(img/c2.png);
height: 100%;
width: 100vw;
}
</style>
<div class="background-image">
<div class="container-fluid">
	<div class="row " style="margin-top: 20px;">
		<div class="col-md-2">
		<ul class="list-group">
			<li class="list-group-item"><a href="">Search</a></li>
			<li class="list-group-item"><a href="#">View All Tickets</a></li>
			<li class="list-group-item"><a href="#">Edit Destination</a></li>
			<li class="list-group-item"><a href="#">Edit Packages</a></li>
			<li class="list-group-item"><a href="#">Delete Tickets</a></li>
			<li class="list-group-item"><a href="#">Banking</a></li>
			<li class="list-group-item"><a href="#">Police</a></li>
			<li class="list-group-item"><a href="#">Medical</a></li>
		</ul>
		</div>
		<div class="col-md-10">
			<table border="1" class="table ">
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Address</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Package</th>
					<th>Destination</th></tr>

			<?php
					$sql ="SELECT * FROM `booking_details`";
					$data= mysqli_query($con,$sql);
					$total = mysqli_num_rows($data);
					echo  "Total number of Records :".$total."<hr>";
					if($total!=0)
					{
						while ($result=mysqli_fetch_assoc($data)) {
							echo "
							<tr>
								<td>".$result['id']."</td>
								<td>".$result['name']."</td>
								<td>".$result['email']."</td>
								<td>".$result['contact']."</td>
								<td>".$result['address']."</td>
								<td>".$result['dob']."</td>
								<td>".$result['gender']."</td>
								<td>".$result['package']."</td>
								<td>".$result['destination']."</td>
							</tr>";
						}
					}
					else{
						echo "No records found";
					}
				
			?>
			</table>
		</div>
	</div>
</div>
</div>
<?php include 'footer.php';?>