<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 04:04:28 GMT -->
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

<title>Search Crime</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<?php include("header.php"); ?>

<section id="page-title">
<div class="container clearfix">
<h1>Search Crime</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Search Crime</li>
</ol>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">

 <input style="text-align: center; width: 400px; margin: auto;" id="crimelocation" type="text" class="form-control" name="crimelocation" placeholder="Search Crime Location" ><br>
                   

<div id="crimemap" style="width: 100%; height: 550px;"></div>
<script type="text/javascript">

function InitialiseMap()
{
  var crimeIcon = {
    url: "images/about/1.png",
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(17, 34),
    scaledSize: new google.maps.Size(50, 50)
  };

  var geu = {lat: 30.273471, lng: 77.999716};
  var map = new google.maps.Map(document.getElementById('crimemap'),
  {
    zoom: 14,
    center: geu
  });

  var markPoint = new google.maps.Marker(
  {
    position: geu,
    map: map,
    icon: crimeIcon,
    draggable: true
  });

  var search = document.getElementById('crimelocation');
  var searchBox = new google.maps.places.SearchBox(search);

  var markers = [markPoint];

  searchBox.addListener('places_changed', function() 
  {
    
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    markers.forEach(function(marker) 
    {
      marker.setMap(null);
    });
    
    markers = [];

    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) 
    {
      if (!place.geometry) 
      {
        console.log("Returned place contains no geometry");
        return;
      }

      /*markers.push(new google.maps.Marker(
      {
        map: map,
        icon: crimeIcon,
        title: place.name,
        position: place.geometry.location,
        draggable: true
      }));*/

      $.post("searched_crime.php",
      {

          latitude: place.geometry.location.lat(),
          longitude : place.geometry.location.lng()
      },
      function(data, status)
      {
         // alert(data);
          var latlng = data.split(":");

          for(var x = 0;x<latlng.length-1;x++)
          {
              var locallatlng = latlng[x].split(",");
              var coordinates = {lat: parseFloat(locallatlng[0]), lng: parseFloat(locallatlng[1])};

              markers.push(new google.maps.Marker(
              {
                map: map,
                icon: crimeIcon,
                position: coordinates
              }));              
          }

      });

      map.panTo(place.geometry.location);

      /*if (place.geometry.viewport) 
      {
        bounds.union(place.geometry.viewport);
      } 
      else 
      {
        bounds.extend(place.geometry.location);
      }*/
    });
    //map.fitBounds(bounds);
  });
}
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPAquAGSqwV1wQNc_PalEM7CcqlaSSsQ&libraries=places&callback=InitialiseMap"
         async defer></script>

</div>
</div>
</section>
<?php include("footer.php"); ?>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<script src="js/functions.js"></script>
</body>


</html>