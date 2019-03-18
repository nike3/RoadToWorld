<!DOCTYPE html>
<html lang="en">
<head>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/custom.css" type="text/css" rel="stylesheet">

<!-- Helper Styles -->
<link href="css/loaders.css" type="text/css" rel="stylesheet">
<link href="css/swiper.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo_themes/default/default.css">
<!-- Font Awesome Style -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
	<title>City Guide:NewYork</title>
</head>
<body style="background-color: #ffd89b;">


    <div>
      <nav class="navbar navbar-toggleable-md mb-4 top-bar navbar-static-top sps sps--abv">
        <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">
          Road To<span><i>NewYork</i></span></a>
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <ul style="list-style-type:none" class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="index.php#home">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="index.php#packages">Cities</a> </li>
        <li class="nav-item"> <a class="nav-link" href="index.php#about">About Us</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#index.phpcontact">Contact</a> </li>
        </ul>
      </div>
      </div>
    </nav>
  </div>

<br><br><br><br>
<div style="overflow: hidden;" >

  <div style="width: 500px; margin-left: 10px; margin-right: 30px; float: left; border: 1px solid black;" id="map"></div>
  <div class="col-md-7" style='margin-left: 30px; margin-right: 30px;'>
  <div onclick="initMap(1)" style="width: 300px; height: 262px; float: left; margin-right: 30px; margin-top: 40px; border-radius: 15px; background-color: #dddddd;" class="card">
  <img style="height: 200px;" width="300px;" src="images/slide/5.jpg" alt="Statue of Liberty" style="width:100%">
  <div class="container">
    <h4><b>Statue of Liberty</b></h4>
    <!--<p>Red Marker</p> -->
  </div>
      </div>

<div onclick="initMap(2)" style="width: 300px; height: 262px; float: left; margin-top: 40px; border-radius: 15px; background-color: #dddddd; margin-right: 80px;" class="card">
  <img style="height: 200px;" width="300px;" src="images/slide/29.jpg" alt="Times Square" style="width:100%">
  <div class="container">
    <h4><b>Times Square</b></h4>
    <!--<p>Blue Marker</p>-->
  </div>
</div>

<div onclick="initMap(3)" style="width: 300px; float: left; margin-top: 30px; margin-right: 30px; height: 262px; border-radius: 15px; background-color: #dddddd;" class="card">
  <img style="height: 200px;" width="300px;" src="images/slide/30.jpg" alt="Central Park" style="width:100%">
  <div class="container">
    <h4><b>Central Park</b></h4>
    <!--<p>Green Marker</p>-->
  </div>
</div>
<div style="width: 300px; float: left; margin-top: 30px; height: 262px; border-radius: 15px; background-color: #dddddd" class="card">
  <img style="height: 200px;" width="300px;" src="images/slide/16.jpeg" alt="Helpline" style="width:100%">
  <div class="container">
    <h4><b>Helpline</b></h4>
    <p>Tourist Enquiry: +912222024482</p>
  </div>
</div>
</div>
<form action = "comments.php">
	<input type = "submit" value ="Post Comments" style = "backgrund-color: white;border-radius: 12px; margin-left: 300px; margin-top: 30px">
</form>
</div>
<script>

function initMap(no) {

  var NewYork = {lat:40.712776 , lng: -74.005974};
  var efl = {lat:40.689247, lng:-74.044502};
  var lvm = {lat:40.756816, lng:-73.986031};
  var adt = {lat:40.782864, lng:-73.965355};
  var map = new google.maps.Map(
  document.getElementById('map'), {zoom:11.0, center: NewYork});

  if(no==1)
  var marker = new google.maps.Marker({position: efl, map: map, icon: 'images/markers/m_1.png',  label: { color: 'black', fontSize: '18px', text: 'Statue of Liberty' }});
  if(no==2)
  var marker_2 = new google.maps.Marker({position: lvm, map: map, icon: 'images/markers/m_2.png', label: { color: 'black', fontSize: '18px', text: 'Times Square' }});
  if(no==3)
  var marker_3 = new google.maps.Marker({position: adt, map: map, icon: 'images/markers/m_3.png', label: { color: 'black', fontSize: '18px', text: 'Central Park'}});

}
</script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7pHx_fAucZiCHjMQqwzwgK7LkSksMW8M&callback=initMap">
    </script>
    <script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
