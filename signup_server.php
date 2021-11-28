
<?php

include('connection.php');

$nameuser = mysqli_real_escape_string($con,$_POST['nameuser']);
$emailuser = mysqli_real_escape_string($con,$_POST['emailuser']);
$mobileuser = mysqli_real_escape_string($con,$_POST['mobileuser']);
$passuser = mysqli_real_escape_string($con,$_POST['passuser']);
$repassuser = mysqli_real_escape_string($con,$_POST['repassuser']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$location=mysqli_real_escape_string($con,$_POST['location']);
$list = trim($location,"(");
$list1=trim( $list,")");
$array=explode(",",$list1);

$message='';

if($passuser !=  $repassuser)
{
    $message = "password_is_not_same";
}

$query = "select useremail from useraccount where useremail='$emailuser'";
$email_result = mysqli_query($con,$query);

if(mysqli_num_rows($email_result) == 1)
{
    $message = $message."email_is_present";
}

$query = "select usermobile from useraccount where usermobile='$mobileuser'";
$mobile_result = mysqli_query($con,$query);

if(mysqli_num_rows($mobile_result) == 1)
{
    $message  = $message."number_already_exist";
} 

if($message == "")
{
    $query = "insert into useraccount(username,useremail,userpass,usermobile,location,latitute,longitude) values('$nameuser','$emailuser','$passuser','$mobileuser','$address','$array[0]','$array[1]')";
    mysqli_query($con, $query);
    $to = $emailuser;
	$subject = "Confirmation Link";
	$txt ="Thanks for signing up!
------------------------
Username: $nameuser
Password: $passuser
------------------------
 
Please click this link to activate your account:
http://localhost/crime/confirm.php?email=$emailuser";
	mail($to,$subject,$txt);
    echo("success");
}
else
{
    echo($message);
}

?>
