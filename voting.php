<?php
include("connection.php");
$useremail=$_GET['email'];
$value=$_GET['value'];
$id=$_GET['id'];
if($value=="yes")
{
	$query="update vote set yes=yes+1 where compid='$id'";
	mysqli_query($con,$query);
}
else if($value=="no")
{
	$query="update vote set no=no+1 where compid='$id'";
	mysqli_query($con,$query);
	$query="select no from vote where compid='$id'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
	$no=$row['no'];
	if($no>3)
	{
		$query="update crimereport set archive=1 where compid='$id'";
	    mysqli_query($con,$query);
	    $sql="select userid from crimereport where compid='$id'";
	    $ans=mysqli_query($con,$sql);
	    $row=mysqli_fetch_array($ans);
	    $userid=$row['userid'];
	    $sql1="select useremail from useraccount where userid='$userid'";
	     $ans1=mysqli_query($con,$sql1);
	    $row=mysqli_fetch_array($ans1);
	    $mailid=$row['useremail'];
	    $to = $mailid;
		$subject = "Regarding Your Complaint";
		$txt ="Sorry your report have been archived due to low votes";
		mail($to,$subject,$txt);
	}

}
else
{
	$query="update vote set unknown=unknown+1 where compid='$id'";
	mysqli_query($con,$query);
}
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

<title>Voting</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<section id="content">
<div class="content-wrap">
<div class="container center clearfix">
<div class="heading-block center">
<h1>Your Vote Has Been Counted</h1>
</div>
<p>Thank you For Voting</p>
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