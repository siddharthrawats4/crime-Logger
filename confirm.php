<?php
include("connection.php");
$useremail=$_GET['email'];
$query="Update useraccount set userverify=1 where useremail='$useremail'";
mysqli_query($con,$query);
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 04:04:28 GMT -->
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

<title>Confirm Page</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<section id="content">
<div class="content-wrap">
<div class="container center clearfix">
<div class="heading-block center">
<h1>Your Account Has Been Activated</h1>
</div>
<p>Click on Button Below</p>
<a href="signin.php" class="btn btn-secondary topmargin-sm">&lArr; Back to the Login</a>
</div>
</div>
</section>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<script src="js/functions.js"></script>
</body>


</html>