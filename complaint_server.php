<?php
session_start();
include("connection.php");
$userid=$_SESSION['userid'];
$comptype=mysqli_real_escape_string($con,$_POST['comptype']);
$compdesp=mysqli_real_escape_string($con,$_POST['compdesp']);
$comptime=mysqli_real_escape_string($con,$_POST['comptime']);
$compdate=mysqli_real_escape_string($con,$_POST['compdate']);
$location=mysqli_real_escape_string($con,$_POST['location']);
$lat=mysqli_real_escape_string($con,$_POST["lat"]);
$lng=mysqli_real_escape_string($con,$_POST["lng"]);
$file=$_FILES["newfile"]["name"];
$file_tmp=$_FILES["newfile"]["tmp_name"];
move_uploaded_file($file_tmp,"report/".$file);

$query="insert into crimereport(userid,comptype,compdesp,comptime,compdate,location,file,latitute,longitude) values('$userid','$comptype','$compdesp','$comptime','$compdate','$location','$file',$lat,$lng)";
	

	  if(mysqli_query($con,$query))
	  {
        $query1="select compid from crimereport where userid='$userid' AND comptype='$comptype' AND compdesp='$compdesp' AND location='$location' AND latitute='$lat' AND longitude='$lng'";
        $result=mysqli_query($con,$query1);
        $row=mysqli_fetch_array($result);
        $id=$row['compid'];
        $query2="insert into vote(compid) values('$id')";
        mysqli_query($con,$query2);

	  	?>
	
		<script type="text/javascript">

				alert("Complaint Recorded");
				window.location="complaint.php";
				
		</script>
        <?php
        $sql = "SELECT latitute,longitude,useremail FROM useraccount WHERE 100 * SQRT(POWER($lat-latitute,2) + POWER($lng-longitude,2)) <= 2 AND archive = 0";

        $result = mysqli_query($con,$sql);

            if(mysqli_num_rows($result) > 0)
            {
             while($row=mysqli_fetch_array($result)){

            	$to = $row['useremail'];
				$subject = "Confirmation Link";
				$txt ="$compdesp has happened in your area : 


                    Please click on the link below to vote yes:
                    
                    http://localhost/crime/voting.php?email=$to&value=yes&id=$id


                    Please click on the link below to vote no:
                    
                    http://localhost/crime/voting.php?email=$to&value=no&id=$id


                    Please click on the link below if you dont know:
                    
                    http://localhost/crime/voting.php?email=$to&value=unknown&id=$id




                ";
                mail($to,$subject,$txt);
            }
        }
    }

	  
	
	


?>


