
<?php include 'adm_header.php';?>
<style>
.background-image{
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-image: url(../img/c2.png);
	height: 100vh;
	width: 100vw;
}
.in{
	border-radius: 15px;
	width:250px;
}
.row1{
	margin: 20px;
}
</style>
<div class="background-image">
	<div class="container text-center">
		 <div class="row">
		 	
		 	<div class="offset-md-3 col-md-6">
		 		<div  class="row">
		 			<div class="offset-2 col-8"><h1 class="text-center">ADMIN PANEL</h1></div>
		 		</div>
		 	<form method="post" action="admin_view.php">	
		 		<div class="row row1">
		 			<div class="col-md-3"><b>Email:</b></div>
		 			<div class="col-md-9"><input class="in" type="text" name="email" required="required"></div>
		 		</div>
		 		<div class="row row1">
		 			<div class="col-md-3"><b>Password:</b></div>
		 			<div class="col-md-9"><input class="in" type="password" name="pass" required="required"></div>
		 		</div>
		 		<div class="row row1">
		 			<input class="text-center" 
		 			type="submit" name="submit" onclick="login_func()" value="Submit" required="required" >
		 		</div>
		 		<!-- <div class="row row1"><button class="btn btn-primary" type="button" name="submit">Continue</button>
		 		</div> -->
		 		<!-- <?php
		 			session_start();
		 			$_SESSION['email']='ankitasolanki702@gmil.com';
		 			$_SESSION['pass']='123';
		 			if($_SESSION['email'] == $_)
		 		?> -->
		 	</form>	
		 	</div>
		 </div>
	</div>
</div>

<?php include '../footer.php';?>
<script type="text/javascript">
	function login_func() {
		$.ajax(){
			
		}

	}
</script>