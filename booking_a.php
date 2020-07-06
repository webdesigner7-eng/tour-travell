<!-- Header -->
<?php include 'header.php';
	include 'validation.php';
 ?>

<style>
.background-image{
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-image: url(img/a2.jpg);
	height: 100vh;
	width: 100vw;
}

</style>
<!-- booking -->
<div class="background-image">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="text-center">Booking Details</h3>

				<form action="" method="post" enctype="multipart/form-data">
					<table class="table table-borderless">
						<tr>
							<td class="td">Package : </td>
							<td><select class="input" name="package">
								<option value="Family">Family</option>
								<option value="Special">Special</option>
								<option value="None">None</option>
							</select>
							</td>
						</tr>
						<tr>
							<td class="td">Destination : </td>
							<td><select class="input" name="destination">
								<option value="Malesia ">Malesia</option>
								<option value="Thailand">Thailand</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Shri-lanka">Shri-lanka</option>
								<option value="Nepal">Nepal</option>
							</select>
							</td>
						</tr>
						<tr>
							<td class="td">Id Proof: </td>
							<td><input class="file" type="file" name="a_proof" id="Aadhar">
							<input class="file" type="file" name="p_proof" id="pan">Pan card	</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="submit" value="submit" class="button"/>
							</td>
						</tr>
					</table>	
				</form>
			<!-- New ADdMember -->
				<button id="addMember">Add Members</button>
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
						<tr>
							<td><input type='text' name='name1' placeholder='Name'></td>
							<td><input type='date' name='dob1' ></td>
							<td>
								<select name='gender1'>
									<option value='Male'>Male</option>
									<option value='Female'>Female</option>
									<option value='Other'>Other</option>
								</select>
							</td>
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


