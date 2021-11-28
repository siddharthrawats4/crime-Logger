<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 03:52:40 GMT -->
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

<title>Contact Us</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<?php include("header.php");?>

<section id="page-title">
<div class="container clearfix">
<h1>Contact</h1>
<span>Get in Touch with Us</span>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Contact</li>
</ol>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">

<div class="col_half">
<div class="fancy-title title-dotted-border">
<h3>Send us an Email</h3>
</div>
<div class="contact-widget">
<div class="contact-form-result"></div>
<form class="nobottommargin" action="mail.php" method="POST">

<div class="col_one_third">
<label for="name">Name <small>*</small></label>
<input type="text"  name="name" value="" class="sm-form-control required" />
</div>
<div class="col_one_third">
<label for="email">Email <small>*</small></label>
<input type="email"  name="email" value="" class="required email sm-form-control" />
</div>
<div class="col_one_third col_last">
<label for="phone">Phone</label>
<input type="text"  name="mobile" value="" class="sm-form-control" />
</div>
<div class="clear"></div>
<div class="col_two_third">
<label for="subject">Subject <small>*</small></label>
<input type="text"  name="subject" value="" class="required sm-form-control" />
</div>
<div class="col_one_third col_last">
<label>Address</label>
<input type="text"  name="address" value="" class="sm-form-control" />
</div>
<div class="clear"></div>
<div class="col_full">
<label>Message <small>*</small></label>
<textarea class="required sm-form-control" name="message" rows="6" cols="30"></textarea>
</div>
<div class="col_full">
<input type="submit"  value="Submit" class="button button-3d nomargin">
</div>
</form>
</div>
</div>

<div class="col_half col_last">
<section id="map" class="gmap" style="height: 410px;"></section>
</div>
</div>
</div>
</section>

<?php include("footer.php");?>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<script src="js/functions.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPAquAGSqwV1wQNc_PalEM7CcqlaSSsQ&callback=initMap"
    async defer></script>
<script src="js/jquery.gmap.js"></script>
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.3165, lng: 78.0322},
          zoom: 12
        });
      }
    </script>
</body>

</html>