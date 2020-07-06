
<?php include 'adm_header.php'; ?>
<style>
.background-image{
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
background-image: url(../img/c2.png);
height: 100%;
width: 100vw;
}
.in{
	border-radius: 50px;
	width: 150px;

}

.button{
	margin: 20px 150px;
}
</style>
<div class="background-image">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-md-3" style="margin-top: 20px;">
			<ul class="list-group">
				<li class="list-group-item"><a href="#">Search</a></li>
				<li class="list-group-item"><a href="display.php">View All Tickets</a></li>
				<li class="list-group-item"><a href="edit_destination.php">Destination</a></li>
				<li class="list-group-item"><a href="edit_package.php">Packages</a></li>
				<li class="list-group-item"><a href="#">Delete Tickets</a></li>
				<li class="list-group-item"><a href="#">Banking</a></li>
				<li class="list-group-item"><a href="#">Police</a></li>
				<li class="list-group-item"><a href="#">Logout</a></li>
			</ul>
			</div>	
			<div class="col-md-9 " style="background-color:#e54e4e80;">
				<div class="row" >
					<div class="offset-md-2 col-md-8">
					<h1 class="text-center">Search</h1>
					<form method="post" action="#" style="margin: 50px">
						<div class="row">
						<div class="col-md-3">Search By: </div>
						<div class="col-md-9">
						<select class="in" name="search_by">
							<option value="id">Ticket NO.</option>
							<option value="name">Name</option>
							<option value="email">Email</option>
							<option value="contact">Contact</option>
							<option value="address">Address</option>
							<option value="dob">DOB</option>
							<option value="gender">Gender</option>
							<option value="package">Package</option>
							<option value="destination">Destination</option>
						</select></div>
						</div>	
						<div class="row">
						<div class="col-md-3">Enter: </div>
						<div class="col-md-9"><input class="in" type="text" name="eml" placeholder="Enter..." required="required"></div>
						<div class="row"><button onclick="search_detail()">Search</button></div>
					</form>	

					</div>
				</div>
				
				<div class="col-12" id="detail" style="display: none;">
				<table border="2" class="table ">
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Address</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Package</th>
					<th>Destination</th>
				</tr>

				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") 
				{	
					if(!empty($_POST['eml']))
					{	$eml=$_POST['eml'];
						$sql ="SELECT * FROM `booking_details` WHERE ".$_POST['search_by']."='$eml'";
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
					}
				}
				?>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function search_detail(){
		document.getElementById("detail").style.display="block";

	}
</script>