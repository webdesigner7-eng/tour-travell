
<?php 
    include 'header.php';
  ?>
<style>
	/* Make the image fully responsive */
  .background-image{
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    background-image: url(); 
    width: 100vw;
    height: 100vh;
  }
  .carousel-inner img {
  	width: 100%;
  	height: 80vh;
    margin-bottom: 50px;
  }
	.carousel-caption{
		text-align: center;
		position: absolute;
    background-color:  #00000080;
		top: 20%;
    height: 300px;
    width: 600px;
    padding: 30px;
	}
  .small-img{
    position: relative;
    width: 100%;
    height:70%;
  }
 

</style>

<!-- Navigation -->
	
<div id="demo" class="carousel slide" data-ride="carousel" >
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<img class="img" src="img/a2.jpg" >
			<div class="carousel-caption">
				<h1>About Us</h1>
				<p>Tour & Travell is part of life through which people can find their peace, happiness for the betterment of Life. Its very significant for each and everyone's Life to do something different around Buddha's vision. Change is necessary to change Life; Different people, places, Cultures teach us by which we can learn and experience unique things. </p>
			</div>
         
    </div>
    <div class="carousel-item">
      <img class="img" src="img/3a.jpg" >
			<div class="carousel-caption">
				<h1>Haliday packages</h1>
				<p>Make your holidays memorable with family & friends around Sea, Nature, Lord Buddha in Limited Packages. </p>
			</div> 
    </div>
    <div class="carousel-item">
      <img class="img" src="img/w.jpg" >
			<div class="carousel-caption">
				<h1>Ready, Steady, Go!</h1>
				<p>It's time to get ready for travelling and visit places.The time has come if you want to stay longer with your lovely and close people, then don't wait for the Time, just enjoy and live your time.</p>
			</div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container">
  <div class="row">
      
  </div>
</div>
<!--footer  -->
<?php include 'footer.php';?>
