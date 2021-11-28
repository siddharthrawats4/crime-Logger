<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/login-register-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 04:04:28 GMT -->
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

<title>Complaint Report</title>
<style type="text/css">
	 #map {
        height: 100%;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 50%;
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
<h1>Complaint Report</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page"><a href="complaint.php">Complaint</a></li>
</ol>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">
<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
<div class="acc_content clearfix">
</div>
<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>Report Complaint Here</div>
<div class="acc_content clearfix">
<form action="complaint_server.php"  method="POST"  enctype="multipart/form-data">
<div class="col_full">
<label for="register-form-name">Complaint Type:</label>
<select class="form-control" name="comptype">
<option class="form-control" selected>Murder</option>
<option class="form-control">Rape</option>
<option class="form-control">Robery</option>
<option class="form-control">Rape</option>
<option class="form-control">Fraud</option>
</select>
</div>
<div class="col_full">
<label for="register-form-email">Complaint Description:</label>
 <textarea class="form-control" name="compdesp" id="compdesp" rows="10" cols="20"></textarea>
</div>
<div class="col_full">
<label for="register-form-username">Time Of Crime:</label>
 <input type="Time" class="form-control" name="comptime" id="comptime"required>
</div>
<div class="col_full">
<label for="register-form-phone">Date of Crime:</label>
<input type="Date" class="form-control" name="compdate" id="compdate"   required>
</div>
<div class="col_full">
<label for="register-form-password">Location of Crime:</label>
 <div class="pac-card" id="pac-card">
                                  <div>
                                    <div id="title">
                                      Autocomplete search
                                    </div>
                                    <div id="type-selector" class="pac-controls">
                                      <input type="radio" name="type" id="changetype-all" checked="checked">
                                      <label for="changetype-all">All</label>

                                      <input type="radio" name="type" id="changetype-establishment">
                                      <label for="changetype-establishment">Establishments</label>

                                      <input type="radio" name="type" id="changetype-address">
                                      <label for="changetype-address">Addresses</label>

                                      <input type="radio" name="type" id="changetype-geocode">
                                      <label for="changetype-geocode">Geocodes</label>
                                    </div>
                                    <div id="strict-bounds-selector" class="pac-controls">
                                      <input type="checkbox" id="use-strict-bounds" value="">
                                      <label for="use-strict-bounds">Strict Bounds</label>
                                    </div>
                                  </div>
                                  <div id="pac-container">
                                    <input id="pac-input" type="text"
                                        placeholder="Enter a location" name="location">
                                  </div>
                                </div>
                                <div id="map" style="height: 500px;"></div>
                                <div id="infowindow-content">
                                  <img src="" width="16" height="16" id="place-icon">
                                  <span id="place-name"  class="title"></span><br>
                                  <span id="place-address"></span>
                                </div>

                                <script>
                                  // This example requires the Places library. Include the libraries=places
                                  // parameter when you first load the API. For example:
                                  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
                                       var map;
                                     var markers = [];


                                       // Adds a marker to the map and push to the array.
                                          

                                          // Sets the map on all markers in the array.
                                          function setMapOnAll(map) {
                                            for (var i = 0; i < markers.length; i++) {
                                              markers[i].setMap(map);
                                            }
                                          }

                                          // Removes the markers from the map, but keeps them in the array.
                                          function clearMarkers() {
                                            setMapOnAll(null);
                                          }

                                          // Deletes all markers in the array by removing references to them.
                                          function deleteMarkers() {
                                            clearMarkers();
                                            markers = [];
                                          }
                                                                          
                                  function initMap() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                      center: {lat: 30.3165, lng: 78.0322},
                                      zoom: 13
                                    });
                                    var card = document.getElementById('pac-card');
                                    var input = document.getElementById('pac-input');
                                    var types = document.getElementById('type-selector');
                                    var strictBounds = document.getElementById('strict-bounds-selector');
                                       
                                        //------------marker----------------------
                                        
                                           map.addListener('click', function(event) {
                                                  
                                                      if (markers.length >= 1) {
                                                          deleteMarkers();
                                                      }
                                                  
                                                        addMarker(event.latLng);

                                                  function addMarker(location) {
                                                        var marker = new google.maps.Marker({
                                                          position: location,
                                                          map: map
                                                        });
                                            
                                            markers.push(marker);
                                         
                                          }
                                                  document.getElementById('lat').value = event.latLng.lat();
                                                  document.getElementById('lng').value =  event.latLng.lng();
                                               
                                                });
                                                                          
                                          
                                              //------------marker----------------------------------



                                    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

                                    var autocomplete = new google.maps.places.Autocomplete(input);

                                    // Bind the map's bounds (viewport) property to the autocomplete object,
                                    // so that the autocomplete requests use the current map bounds for the
                                    // bounds option in the request.
                                    autocomplete.bindTo('bounds', map);

                                    var infowindow = new google.maps.InfoWindow();
                                    var infowindowContent = document.getElementById('infowindow-content');
                                    infowindow.setContent(infowindowContent);
                                    var marker = new google.maps.Marker({
                                      map: map,
                                      anchorPoint: new google.maps.Point(0, -29)
                                    });

                                    autocomplete.addListener('place_changed', function() {
                                      infowindow.close();
                                      marker.setVisible(false);
                                      var place = autocomplete.getPlace();
                                      if (!place.geometry) {
                                        // User entered the name of a Place that was not suggested and
                                        // pressed the Enter key, or the Place Details request failed.
                                        window.alert("No details available for input: '" + place.name + "'");
                                        return;
                                      }

                                      // If the place has a geometry, then present it on a map.
                                      if (place.geometry.viewport) {
                                        map.fitBounds(place.geometry.viewport);
                                      } else {
                                        map.setCenter(place.geometry.location);
                                        map.setZoom(17);  // Why 17? Because it looks good.
                                      }
                                      marker.setPosition(place.geometry.location);
                                      marker.setVisible(true);

                                      var address = '';
                                      if (place.address_components) {
                                        address = [
                                          (place.address_components[0] && place.address_components[0].short_name || ''),
                                          (place.address_components[1] && place.address_components[1].short_name || ''),
                                          (place.address_components[2] && place.address_components[2].short_name || '')
                                        ].join(' ');
                                      }
                                     
                                      

                                      infowindowContent.children['place-icon'].src = place.icon;
                                      infowindowContent.children['place-name'].textContent = place.name;
                                      infowindowContent.children['place-address'].textContent = address;

                                      infowindow.open(map, marker);
                                    });

                                    // Sets a listener on a radio button to change the filter type on Places
                                    // Autocomplete.
                                    function setupClickListener(id, types) {
                                      var radioButton = document.getElementById(id);
                                      radioButton.addEventListener('click', function() {
                                        autocomplete.setTypes(types);
                                      });
                                    }

                                    setupClickListener('changetype-all', []);
                                    setupClickListener('changetype-address', ['address']);
                                    setupClickListener('changetype-establishment', ['establishment']);
                                    setupClickListener('changetype-geocode', ['geocode']);

                                    document.getElementById('use-strict-bounds')
                                        .addEventListener('click', function() {
                                          console.log('Checkbox clicked! New state=' + this.checked);
                                          autocomplete.setOptions({strictBounds: this.checked});
                                        });
                                  }
                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPAquAGSqwV1wQNc_PalEM7CcqlaSSsQ&libraries=places&callback=initMap"
                                    async defer></script>
                        
                           <br>
                           <input type="hidden" id="lat" name="lat">
                           <input type="hidden" id="lng" name="lng">
</div>
<div class="col_full">
<label for="register-form-repassword">Upload Evidence,If any:</label>
<input type="file" id="file1" name="newfile" class="form-control"></div>
<div class="col_full nobottommargin">
 <input type="submit" class="button button-3d button-black nomargin" value="Register"></div>
</div>
</form>
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
</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/login-register-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 04:04:28 GMT -->
</html>