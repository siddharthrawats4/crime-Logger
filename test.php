
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


                            <input style="text-align: center; width: 400px; margin: auto;" id="crimelocation" type="text" class="form-control" name="crimelocation" placeholder="Search Crime Location" >
                   

                        <div id="crimemap" style="width: 100%; height: 550px; border: 1px solid gray;"></div>
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
          alert(data);
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
         <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>


<script src="js/functions.js"></script>
 <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
 <script type="text/javascript" src="js/signin_validation.js"></script>
 <script type="text/javascript" src="js/signup_validation.js"></script>

 <?php
  
    if(isset($_GET['search_button']))  
    {
        echo "<script>
                    $('#crimelocation').focus();
              </script>";
    }
?>


</body>
</html>