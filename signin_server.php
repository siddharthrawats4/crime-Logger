<?php
include('connection.php');
session_start();
$username=mysqli_real_escape_string($con,$_POST['username']);
$passuser = mysqli_real_escape_string($con,$_POST['passuser']);
$query="select * from useraccount where (((useremail='$username' or usermobile='$username')
and userpass='$passuser') and userverify=1)";
$message = "";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$name=$row['username'];
$id=$row['userid'];
if(mysqli_num_rows($result)==1)
{
   echo("success");
   $_SESSION['username']=$name;
   $_SESSION['userid']=$id;

}
else
{
    echo("1");
}
?>