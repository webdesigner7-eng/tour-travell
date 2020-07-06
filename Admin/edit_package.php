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
#detail{
	display: block;
}
.btn{
	margin: 20px;
	border-radius: 10px;
	width: 200px;
	background-color: #15fc05ed;
}
.input{
	width: 90%;
	margin: 2px 10px;
	padding:2px 10px;
	border-radius: 20px;
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
</style>

<div class="background-image">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-md-3" style="margin-top: 20px;">
			<ul class="list-group">
				<li class="list-group-item"><a href="admin_view.php">Search</a></li>
				<li class="list-group-item"><a href="display.php">View All Tickets</a></li>
				<li class="list-group-item"><a href="edit_destination.php">Destination</a></li>
				<li class="list-group-item"><a href="#">Packages</a></li>
				<li class="list-group-item"><a href="#">Delete Tickets</a></li>
				<li class="list-group-item"><a href="#">Banking</a></li>
				<li class="list-group-item"><a href="#">Police</a></li>
				<li class="list-group-item"><a href="#">Logout</a></li>
			</ul>
			</div>	
			<div class="col-md-9">
			<div><h1 class="text-center">Packages</h1></div>

				<div class="row">
					<div class="col-sm-4">
						<button class="btn btn-primary" onclick="add()">Add New Packages</button>
					</div>
					<div class="col-sm-4">
						<button class="btn btn-primary" onclick="edit_delete()">Edit/Delete Packages</button>
					</div>
				</div>

<!-- div for  new entry -->
				<div class="row" >
					<div class="offset-2 col-md-8" style="background-color:#e54e4e80;display: none;margin-bottom : 20px;" id="add-div" >
						<h3 class="text-center"> Add New Packages</h3>
						<form method="post" action="controller.php">
							<div class="row">
								<div  class="col-md-3">Destination</div>
								<div  class="col-md-9"><input class="input" type="text" name="destination" required="required"></div>
							</div>
							<div class="row">
								<div  class="col-md-3">Package-type</div>
								<div  class="col-md-9">
									<select name="pkg_type" class="input">
										<option value="Family package">Family</option>
										<option value="Couple package">Couple</option>
										<option value="Single package">Single</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div  class="col-md-3">Mambers</div>
								<div  class="col-md-9"><input class="input" type="text" name="members"
								 required="required"></div>
							</div>
							<div class="row">
								<div  class="col-md-3">Days</div>
								<div  class="col-md-9"><input class="input" type="text" name="days" 
									required="required"></div>
							</div>
							<div class="row">
								<div  class="col-md-3">Nights</div>
								<div  class="col-md-9"><input class="input" type="text" name="nights" required="required"></div>
							</div>
							<div class="row">
								<div class="col-md-3">Accomodation</div>
								<div class="col-md-9">
									<select name="accomodation" class="input">
										<option value="With Accomodation">With Accomodation</option>
										<option value="Without Accomodation">Without Accomodation</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div  class="col-md-3">Price</div>
								<div  class="col-md-9"><input class="input" type="text" name="price"  required="required"></div>
							</div>
							<div class="row">
								<input type="submit" name="add_pkg" value="Add" class="button"/>
							</div>
						</form>
					</div>
				</div>
<!-- End table -->
<!-- div for  edit/delete -->
				<div class="row" >
					<div class="offset-1 col-md-10" style="background-color:#e54e4e80;display: block;" id="edit-div" >
						<h3 class="text-center"> Edit/Delete Packages</h3>
<?php
$sql ="SELECT * FROM `package`";
$data= mysqli_query($con,$sql);
$total = mysqli_num_rows($data);
echo  "Total number of Records :".$total."<hr>";
?>
						<div class="row">
						<table class="table" border="2">
							<tr>
								<th>S.No</th>
								<th>Destination</th>
								<th>Package-type</th>
								<th>Members</th>
								<th>Days</th>
								<th>Nights</th>
								<th>Accomodation</th>
								<th>Price</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							<tbody>
<?php
	$i=0;
	if($total!=0)
	{	while ($result=mysqli_fetch_assoc($data)) {
		$i++;
	echo "
	<tr>
	<td>".$i."</td>
	<td>".$result['destination']."</td>
	<td>".$result['pkg_type']."</td>
	<td>".$result['members']."</td>
	<td>".$result['days']."</td>
	<td>".$result['nights']."</td>
	<td>".$result['accomodation']."</td>
	<td>".$result['price']."</td>
	<td><button type='button' id='m_edit' data-toggle='modal' data-target='#edit_modal' onclick='edit_func(".$result['pkg_id'].")'>Edit</button</td>
	<td><a href= 'controller.php?pkg_id=$result[pkg_id]'><input type='submit' value='Delete' name='delete_pkg'></a></td>

	</tr>";
	}
	}
	else{
	echo "No records found";
	}
?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
<!-- End  Edit div -->
			</div>
		</div>
	</div>
</div>
<!-- Modal start -->
<div class="modal fade" role="dialog" id="edit_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Edit</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post" action="controller.php">
					<div id="form_show">
					</div>
					<input type="submit" id="edit_btn" name="edit_btn_pkg" value="Update" class="btn btn-primary" />
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->
<?php include 'adm_footer.php';?>
<script type="text/javascript">
	function add(){
		if(document.getElementById("edit-div").style.display="block")
		{
			document.getElementById("edit-div").style.display="none";
		}
		document.getElementById("add-div").style.display="block";
	}
	function edit_delete(){
		if(document.getElementById("add-div").style.display="block")
		{
			document.getElementById("add-div").style.display="none";
		}
		document.getElementById("edit-div").style.display="block";

	}
	function edit_func(pkg_id){
		$.ajax({
			url:"controller.php",
			method:"post",
			data:{p_id:pkg_id},
			success:function(data){
				$('#form_show').html(data);
			}
		});

	}
</script>