
<?php include 'header.php'; ?>
<style>
  .background-image{
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-image: url(img/thai2.jpg);
  height: 100vh;
  width: 100vw;
}
	#map{
		width: 100%;
		height:400px;
	}
  .head{
    border-radius:30px;
    background-color:#2a14e6f5;
    height:50px;
    margin:20px 0 ;
    padding: 10px;

  }
  .head a{
    text-align: center;
    color: white;
    
  }
</style>
<!--body -->
<div class="background-image">
  <div class="container">
    <div class="row text-center">
      <?php
        $sql= "SELECT * FROM destination";
        $data =mysqli_query($con,$sql);
        $total= mysqli_num_rows($data);
        if($total!=0){
          if($total>6)
          {
             while($records = mysqli_fetch_assoc($data)){
            echo "<div class='col-sm-1 head'><a href=#>".$records['dest_name']."</a></div>";
            }
          }
          else{
            while($records = mysqli_fetch_assoc($data)){
            echo "<div class='col-sm-2 head'><a href=#>".$records['dest_name']."</a></div>";
            }
          }
          
        }
      ?>
     <!--  <div class="col-sm-2 head">
        <a href="#">Thailand</a>
      </div>
      <div class="col-sm-2 head">
        <a href="#">Bhutan</a>
      </div>
      <div class="col-sm-2 head">
        <a href="#">Nepal</a>
      </div>
      <div class="col-sm-2 head">
        <a href="#">Shri-lanka</a>
      </div>
      <div class="col-sm-2 head">
        <a href="#">Myanmar</a>
      </div>
      <div class="col-sm-2 head">
        <a href="#">Bangladesh</a>
      </div> -->
    </div>

  	<div id="map"></div>
  </div>
</div>

<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: {lat:15.8700, lng:100.9925}, zoom:8
      });

  addMarker({lat:7.8731,lng:80.7718});
  function addMarker(coords)
  {
    var marker = new google.maps.Marker({position: coords,
     map: map,
     icon:"img/pin.jpg"
    });

  }
}
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
    async defer></script>
<!-- footer -->
<?php include 'footer.php'; ?>

