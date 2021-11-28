<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/dark.css" type="text/css" />
<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="css/responsive.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Login</title>

 <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
<div id="header-wrap">
<div class="container clearfix">
<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>



<nav id="primary-menu" class="dark">
<ul>
<li class="current"><a href="index.php"><div>Home</div></a>
</li>
<li><a href="location.php"><div>My Location</div></a>
</li>
<li><a href="complaint.php"><div>Complaint</div></a>
</li>
<li><a href="search_crime.php"><div>Search Crime</div></a>
</li>
<li class="mega-menu"><a href="contact.php"><div>Contact</div></a>
</li>
<li class="mega-menu"><a href="about.php"><div>About Us</div></a>
</li>
<?php 
if(isset($_SESSION['userid']))
{?>
  <li class="mega-menu"><a href="logout.php"><div>Logout</div></a>
</li>
<?php 
}
else
{?>
<li class="mega-menu"><a href="signin.php"><div>Login</div></a>
</li>
<?php }?>
</ul>
</nav>
</div>
</div>
</header>

<section id="page-title">
<div class="container clearfix">
<h1>My Account</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Login</li>
</ol>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">
<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
<ul class="tab-nav tab-nav2 center clearfix">
<li class="inline-block"><a href="#tab-login">Login</a></li>
<li class="inline-block"><a href="#tab-register">Register</a></li>
</ul>
<div class="tab-container">
<div class="tab-content clearfix" id="tab-login">
<div class="card nobottommargin">
<div class="card-body" style="padding: 40px;">
<form  name="login-form" class="nobottommargin" id="formdesk" method="POST">
<h3>Login to your Account</h3>
<div class="col_full">
<label for="login-form-username">Email or Mobile Number:</label>
<input type="text"pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})|[0-9]{10}" title="please enter a valid email or number" id="username" placeholder="email or mobile number" value="" class="form-control" />
</div>
<div class="col_full">
<label for="login-form-password">Password:</label>
<input type="password" name="login-form-password" id="pass" placeholder="password"  required class="form-control" />
</div>
<center><span align="center" id="Danger" style="display:none; color:red; text-align: center;">please enter the valid details</span></center><br>
<div class="col_full nobottommargin">
<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
<div class="col-lg-8" style="float: right;"><img id="img" style="display:none;" src="images/loading.gif" height="45px"></div>

</div>
</form>
</div>
</div>
</div>
<div class="tab-content clearfix" id="tab-register">
<div class="card nobottommargin">
<div class="card-body" style="padding: 40px;">
<h3>Register for an Account</h3>
<form name="register-form" class="nobottommargin" method="POST" id="formdesk1">
<div class="col_full">
<label for="register-form-name">Full Name:</label>
<input type="text" name="register-form-name" id="user" placeholder="Fullname" required class="form-control" />
</div>
<div class="col_full">
<div id="emailDanger1" style="display:none; color:red; float:right; text-align: center;">email already exist</div>
<label for="register-form-email">Email Address:</label>
<input type="email" name="register-form-email" id="email"  pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})|[0-9]{10}" title="please enter a valid email or number" placeholder="Email" required class="form-control" />
</div>
<div class="col_full">
<div id="mobileDanger" style="display:none; color:red; float:right; text-align: center;">number already exist</div>
<label for="register-form-phone">Phone:</label>
<input type="number" name="register-form-phone" pattern="[0-9]{10}" title="Please enter 10 digit number" id="mobile" placeholder="Mobile Number" required class="form-control" />
</div>
<div class="col_full">
<label for="register-form-password">Choose Password:</label>
<input type="password"  name="register-form-password" id="password" pattern=".{6,}" title="minimum password length 6" placeholder="password"  required class="form-control" />
</div>
<div class="col_full">
<div  id="passDanger" style="display:none; float:right; color:red; text-align: center;">password not matched</div>
<label for="register-form-repassword">Re-enter Password:</label>
<input type="password" name="register-form-repassword" id="repass" placeholder="confirm-password" required class="form-control" />
</div>
<div class="col_full">
<label for="register-form-username">Location:</label>

   <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map" style="height: 300px"></div>
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.3165, lng: 78.0322},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);



        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());

        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();


          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
             document.getElementById('address').value= place.name;
            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));
            document.getElementById("location").value=place.geometry.location;

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPAquAGSqwV1wQNc_PalEM7CcqlaSSsQ&libraries=places&callback=initAutocomplete"
         async defer></script>


  <input type="hidden" class="form-control" id="location" placeholder="Location">
  <input type="hidden" class="form-control" id="address" placeholder="Adress">

</div>
<div class="col_full nobottommargin">
<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
<div class="col-lg-6" style="float: right;"><img id="img1" style="display:none;" src="images/loading.gif" height="45px"></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include("footer.php"); ?>
</div>


<div id="gotoTop" class="icon-angle-up"></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>


<script src="js/functions.js"></script>
 <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
 <script type="text/javascript" src="js/signin_validation.js"></script>
 <script type="text/javascript" src="js/signup_validation.js"></script>

</body>


</html>