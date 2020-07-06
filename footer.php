<style>
.bg-footer{
	height: inherit;
	background-color: black;
	color: white;
  position: relative;
}
.footer-ul{
	/*padding: 20px;*/
	list-style-type: none;
	text-align: center;
}
.copywrite{
	/*padding:30px 20px;*/
	text-align: center;
	color: grey;
	background-color: black;
	color: white;
}
.icon{
	/*margin: 0 150px;*/
}

/*social icons*/
.fa {
border-radius: 30px;
padding: 16px;
font-size: 30px;
margin: 5px 64px;
height: 60px;
width: 60px;
}
.fa-facebook {
background: #3B5998;
color: white;
}

.fa-twitter {
background: #55ACEE;
color: white;
}

.fa-google {
background: #dd4b39;
color: white;
}

.fa-linkedin {
background: #007bb5;
color: white;
}
.fa-youtube {
background: #bb0000;
color: white;
}

.fa-instagram {
background: #125688;
color: white;
}
@media screen and (max-width: 450px) {
.fa{
width: 40px;
padding: 5px;
border-radius: 20px;
text-align: center;
text-decoration: none;
margin:5px 5px;
}
</style>
<footer  style="z-index:0;margin: 20px 0; " class="container-fluid bg-footer">
	<div class="row">
		<div class="col-sm-4">
			<ul class="footer-ul">
				<li>Visited Places</li>
				<li>Packages</li>
				<li>Family Packages</li>
				
			</ul>
		</div>
		<div class="col-sm-4">
			<ul class="footer-ul">
				<li>Hotel</li>
				<li>National & International Flight</li>
				<li>Destination</li>
			</ul>
		</div>
		<div class="col-sm-4">
			<ul class="footer-ul">
				
				<li>About us</li>
				<li>Contact us</li>	
				<li><a href="Admin/admin_login.php">Admin Login</a></li>
			</ul>
		</div>
	</div>
	

  <div class="row">
    <div class="col-sm-2">
      <a href="#" class="fa fa-facebook"></a>
    </div>
    <div class="col-sm-2">
      <a href="#" class="fa fa-twitter"></a>
    </div>
    <div class="col-sm-2">
      <a href="#" class="fa fa-google"></a>
    </div>
    <div class="col-sm-2">
      <a href="#" class="fa fa-linkedin"></a>
    </div>
    <div class="col-sm-2">
      <a href="#" class="fa fa-youtube"></a>
    </div>
    <div class="col-sm-2">
      <a href="#" class="fa fa-instagram"></a>
    </div>
  </div>

  <div class="row"> 
    <hr>
  </div>

	<div class="copywrite" >
	Copywrite &copy; <?php  echo date("Y");?> SujataTour & Travells All rights reserved. No part of this site may be reproduced without our written permission.

	</div>
 </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

