<?php

include('connection.php');

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$message=mysqli_real_escape_string($con,$_POST['message']);
$subject=mysqli_real_escape_string($con,$_POST['subject']);


				$to ="anuragrawat1997@gmail.com";
				$subject = "$subject";
				$txt ="Email - $email

				       Mobile Number - $mobile

				       Address - $address
				       
				       Message - $message
				";
                mail($to,$subject,$txt);
                header("location:index.php");
 ?>
