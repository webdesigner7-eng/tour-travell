<?php 
        include 'header.php';
    ?>
<style>
.background-image{
	background-position: center; 
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-image: url(img/5a.jpg);
	width: 100vw;
	height: 100vh;
	
}
.container-fluid{
	position: relative;
}
.inner-div{
	position: absolute;
	top: 200px;
	left:150px;
}
#input{
	position: relative;
	border-radius: 40px;
	width:100%;
	height:20%;
}

.col-md-4{
	padding: 30px;
	text-align: center;
}
</style>

<!-- Navigation -->
		
<div class="container-fluid">
	<img src="img/5a.jpg" class="background-image">
	<div class="inner-div">
		<p style="font-size: 20px; font-family: auto; color: white;">Get your answer you are looking for</p>
		<h1 style="color: white;">How may we Help you ?</h1>
		<input type="text" name="ques" placeholder="Search" id="input"><i class="fa fa-search" style="font-size: 24px;"></i>
	</div>
	<div class="row">
		<div class="col-md-4 ">
			<h3>Help & Support</h3>
			<p>Get hepl with Signin/registration on our website. Online orders, travell booking and many more. </p>
		</div>
		<div class="col-md-4 ">
			<h3>Feedback</h3>
			<p>Get hepl with Signin/registration on our website. Online orders, travell booking and many more. </p>
		</div>
		<div class="col-md-4 ">
			<h3>Your Bussiness</h3>
			<p>Get hepl with Signin/registration on our website. Online orders, travell booking and many more. </p>
		</div>
	</div>	
</div>
<!-- Footer -->
<?php include 'footer.php'?>
