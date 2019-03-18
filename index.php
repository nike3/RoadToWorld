<!DOCTYPE html>
<html lang="en">
<head>

<!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">

<!-- Custom Casacading style sheet for the given website -->
<link href="css/custom.css" type="text/css" rel="stylesheet">

<!-- Extra helper casacading style sheets -->
<link href="css/loaders.css" type="text/css" rel="stylesheet">
<link href="css/swiper.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo_themes/default/default.css">

<!-- Font Awesome Style -->
<!--A cross-origin request (i.e. with an Origin HTTP header) is performed, but no credential is sent (i.e. no cookie, X.509 certificate, or HTTP Basic authentication).
If the server does not give credentials to the origin site (by not setting the Access-Control-Allow-Origin HTTP header) the image will be tainted and its usage restricted.-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
<title>City Guide:Road To World</title>
</head>

<body>

    <!-- Loading page animation starts here -->

    <!--loader class here specifies the display option flex and shrinking and growing of flex-->
    <!--It also contains flex basis which eventually means to intialize the size of the flex otherwise it is zero-->
    <!--It contains z index specifies the stack order of an element, especially for positioned elements-->
    <div class="loader loader-bg"> <!--loader-bg is here to create the background color-->
    <div class="loader-inner ball-clip-rotate-pulse"> <!-- ball clip loader specifies the position in custom.css and its animation is defined in loaders.css-->
    <div></div>
    <div></div>
    </div>
    </div>
    <!-- Loading page animation ends here -->

<!-- Navigation Bar-->

    <!-- top-bar specifies margin, width and background color-->
    <!-- sps and sps--abv defines the background transparency, padding,position and transition(0.25s) -->
    <!-- mb-5 is margin bottom-->
    <nav class="navbar navbar-toggleable-md mb-4 top-bar navbar-static-top sps sps--abv">
        <!--md is toggeable from medium-->
        <div class="container">
        <!-- data target = collapse means the content is hidden or shown in the click of button-->
        <!-- aria-controls identifies the elements that are contolled when effect is not there-->
        <!-- aria-exapned tells contents are hidden or not-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--Note: Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right.
      Reversing your markup will reverse the placement of the toggler.-->
      <a class="navbar-brand" href="#"> <!--For the Website name-->
          Road To<span><i>World</i></span></a>
      <!--Hiding navbar when it is needed(navbar collapse) -->
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <!-- navbar-nav is defined animation which is collapses-->
        <ul style="list-style-type:none" class="navbar-nav ml-auto">
        <!--nav item folllowed by nav link are used to create link-->
        <li class="nav-item"> <a class="nav-link" href="#home">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#cities">Cities</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#about">About Us</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#contact">Contact</a> </li>
        </ul>
      </div>
        </div>
    </nav>
<!--Navigation bar ends-->

<!-- Swiper Silder-->

<!-- Slider main container -->

<!--main-slider is used to contain for the text above the images where line-height is the space above and below the line-->
<!-- swiper-container is used for animation in swiper.min.css and used as postion style in custome-->
<div class="swiper-container main-slider" id="home">
  <div class="swiper-wrapper">
      <!--swiper-slide contains the text to be aligned centrally and vertically-->
      <!--slider-bg-position will set the bg size as cover(it will fit) and positon as center with overiding (!important) -->
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/1.jpg')">
      <h2>Our purpose is to give you unforgettable destination</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/2.jpg')">
      <h2>There are no passengers on spaceship earth. We are all crew.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/3.jpg')">
      <h2>To enjoy the glow of good health, you must come India.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/4.jpeg')">
      <h2>There are no passengers on spaceship earth. We are all crew.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/5.jpg')">
      <h2>Our purpose is to give you unforgettable destination.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/6.jpg')">
      <h2>To enjoy the glow of good health, you must come India.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/7.jpg')">
      <h2>Our purpose is to give you unforgettable destination.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/8.jpg')">
      <h2>There are no passengers on spaceship earth. We are all crew.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/9.jpg')">
      <h2>To enjoy the glow of good health, you must come India.</h2>
    </div>
        <div class="swiper-slide slider-bg-position" style="background:url('images/slide/10.jpg')">
    <h2>There are no passengers on spaceship earth. We are all crew.</h2>
    </div>
      </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Navigation -->
  <!--swiper button prev is here of the defining the dimensions of silder-->
  <!-- fa-chevron-left is for directional iiems-->
  <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
  <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
</div>

<!-- Cities -->

<!--section container class is used-->
<!--blog-sec keeps text alignment as center -->
<section class="blog-sec" id="cities">
  <div class="container">
  <h1 class="mb-5"> </h1>
      <div class="row">
          <!--Grid template-->
          <div class="col-md-12">
    <div class="heading text-md-center text-xs-center">
      <h2 style="text-align:center"><small>Come and see the incredible World</small>Our Top picks</h2>
    </div>
    </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="paris.php">
              <!--img-fluid is applied to the image so that it scales with the parent element-->
        <img src="images/slide/1.jpg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">Paris</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="rio.php">
        <img src="images/slide/2.jpg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">Rio De Janerio</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="Shangai.php">
        <img src="images/slide/4.jpeg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">Shanghai</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="mumbai.php">
        <img src="images/slide/3.jpg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="mumbai.php">Mumbai</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="agra.php">
        <img src="images/slide/6.jpg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">Agra</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="Kolkata.php">
        <img src="images/slide/13.jpeg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">Kolkata</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="Newyork.php">
        <img src="images/slide/5.jpg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">New York</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="sydney.php">
        <img src="images/slide/7.jpg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">Sydney</a></h3>
        </div>
        </div>
      </div>
          <div class="col-md-4 blog-box">
        <div class="blog-image-block">
          <a href="london.php">
        <img src="images/slide/10.jpg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="row">
        <div class="col-4">
        <h3 class="blog-title"><a href="">London</a></h3>
        </div>
        </div>
      </div>
        </div>
  </div>
</section>

<!--cities ends here-->

<!-- About Us -->

<!--about-sec tells about the background section-->
<!--parallax-section says that background is fixed and with overiding !important -->
<!--Hree before is used in about-sec, ::before creates a pseudo-element that is the first child of the selected element.
It is often used to add cosmetic content to an element with the content property. It is inline by default.-->
<section class="about-sec parallax-section" id="about">
  <div class="container">
    <h1 class="mb-5"> </h1>
    <div class="row">
      <div class="col-md-3">
          <h2><small><b>Who We Are</b></small>About<br>
          Us</h2>
      </div>
      <div class="col-md-4">
        <p>We are a private comapany which gives you the latest top picks in India, specifically created to select an unforgettable place.</p>
        <p>This is not a guide for the average tourist. We will not show you the best place to buy tacky souvenirs, sell you generic guided tours, or highlight the same old tourist attractions.
            Here, we feature the vibrant neighborhoods around the world where contemporary arts and culture thrive and tolerance is celebrated. It is the quintessential exploration guide made by and for the urban creatives.</p>
      </div>
      <div class="col-md-4">
        <p>Spend your holidays without the stress of the typical noisy group tours and far away from those tedious tourist itineraries. A personal driver and professional guide will guide you to the best regions of India. You will avoid the stress of getting lost, waiting in long lines and feeling overwhelmed.
            Our main concern is to make our guests comfortable and pass them all the knowledge we have on our country in order to promote India and gain another "goodwill ambassador" abroad.</p>
      </div>
    </div>
  </div>
</section>

<!--About Us ends here-->

<!-- VIDEO -->

<section class="video-sec parallax-section">
    <!--Class overlay is added to disable the blindness-->
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 videoLength">
        <iframe style='height:550px; width:100%' src="https://www.youtube.com/embed/77czO8sxABI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</section>

<!--VIDEO ends here-->

<!--Contact Us Starts here-->
<section class="contact-sec" id="contact">
  <div class="container">
  <h1 class="mb-5"> </h1>
  <h2>Get in Touch <small><b><i>Come to our website and explore it's beauty.</i></b></small> </h2>
    <div class="row">
      <div class="col-md-12">
        <h2>+91 9198993470</h2>
        <h3>viratc84@gmail.com</h3>
        <h3>
        <a href="https://www.facebook.com/" target="_blank">
        <img src="images/items/facebook.png" width="28" height="28">
        </a>
        <a href="https://www.instagram.com/" target="_blank">
        <img src="images/items/instagram.png" width="28" height="28">
        </h3>
        </a>
      </div>
    </div>
  </div>
</section>

<!--Contact us ends here-->

<footer>
  <div class="container">
    <div class="row">
        <div><center>&copy; All rights reserved. <script type="text/javascript">document.write(new Date().getFullYear()); </script></center></div>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<!-- Every file is places at the end such that it will load faster!!! -->
<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollPosStyler.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/core.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bb34a8fb033e9743d01f463/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*'); //set custom metadata regarding this chat visitor.This function takes in two values; attribute and callback;The attribute value is of Object data type which is a key value pair.
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
