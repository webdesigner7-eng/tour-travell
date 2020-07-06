
<?php include 'adm_header.php';?>
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
	border: none;
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
#in{
	display: none;
}
</style>
<div class="background-image">
<div class="container-fluid">
	<div class="row " >
		<div class="col-md-3" >
		<ul class="list-group">
			<li class="list-group-item"><a href="admin_view.php">Search</a></li>
			<li class="list-group-item"><a href="display.php">View All Tickets</a></li>
			<li class="list-group-item"><a href="#">Destination</a></li>
			<li class="list-group-item"><a href="edit_package.php">Packages</a></li>
			<li class="list-group-item"><a href="#">Delete Tickets</a></li>
			<li class="list-group-item"><a href="#">Banking</a></li>
			<li class="list-group-item"><a href="#">Police</a></li>
			<li class="list-group-item"><a href="#">Logout</a></li>
		</ul>
		</div>
		<div class="col-md-9" >
			<div><h1 class="text-center">Destination</h1></div>

			<div class="row">
				<div class="col-sm-6">
					<button class="btn btn-primary" onclick="add_new()">Add-New Destination</button>
				</div>
				<div class="col-sm-6">
					<button class="btn btn-primary" onclick="editDelete()">Edit/Delete Destination</button>
				</div>
			</div>
	<!-- Add destinaton -->
			<div class="row">
				<div class="offset-2 col-md-8" id="add_new" style="display: none;background-color:#e54e4e80;margin-bottom: : 20px;">	
					<h3 class="text-center"> Add New Destination</h3>
					<form method="post" action="controller.php">
						<div class="row">
							<div class="col-md-3">
								Destination
							</div>
							<div class="col-md-9">
								<input class="input" type="text" name="destination" required="required">
							</div>
						</div>
						<div class="row">
								<input type="submit" name="add_destination" value="Add" class="button"/>
						</div>
					</form>
				</div>
			</div>
	<!-- Ennd -->
	<!-- Edit/Delete destination -->
			<div class="row">
				<div class="offset-2 col-md-8" id="editDelete" style="display: block;background-color:#e54e4e80;">	
				<?php
				$sql ="SELECT * FROM `destination`";
				$data= mysqli_query($con,$sql);
				$total = mysqli_num_rows($data);
				echo  "Total number of Records :".$total."<hr>";

				?>
				<table border="2" class="table ">
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tbody class="d-tbody">
			<?php
			$i=0;
			if($total!=0)
			{	while ($result=mysqli_fetch_assoc($data)) {
					$i++;
					echo "
					<tr>
						<td>".$i."</td>
						<td id='dest_name'>".$result['dest_name']."</td>
						<td><button type='button' id='m_edit' data-toggle='modal' data-target='#editModal' onclick='edit_func(".$result['dest_id'].")' >edit</button></td>
	<td><a href='controller.php?dest_id=$result[dest_id]'><input type='submit' value='Delete' name='delete_dest'></a></td>
						 
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
	<!-- End edit/delte -->
		</div>
	</div>
</div>

<!--  Edit Div-->
<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<H3 class="modal-title">Edit</H3>
				<button class="close" type="button" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post" action="controller.php">
					<label>Destination</label>
						<div id="form_show">
						</div>
						<!-- 1 way to show -->
						<!-- <input type="text" name="id" class="id"> -->
					<br>
					<input type="submit" id="edit_btn" name="edit_dest_btn" value="Update" class="btn btn-primary"/>
				</form>
			</div>
		</div>
	</div>
	
</div>
<!-- End -->

<?php include 'adm_footer.php';?>
<script type="text/javascript">
	function add_new(){
		if(document.getElementById("editDelete").style.display="block"){
			document.getElementById("editDelete").style.display="none";
		}
		document.getElementById("add_new").style.display="block";
	}
	function editDelete(){
		if(document.getElementById("add_new").style.display="block"){
			document.getElementById("add_new").style.display="none";
		}
		document.getElementById("editDelete").style.display="block";
	}
	var id;
	function edit_func(dest_id){
		 id = dest_id;
		$.ajax({
			url:"controller.php",
			method:"post",
			data:{d_id:dest_id},
			success:function(data){
				$("#form_show").html(data);
			}
		});
	}
	
</script>