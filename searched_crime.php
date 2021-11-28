<?php

	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	 include("connection.php");

	$sql = "SELECT latitute,longitude FROM crimereport WHERE 100 * SQRT(POWER($latitude-latitute,2) + POWER($longitude-longitude,2)) <= 2 AND archive = 0 ";

	$result = mysqli_query($con, $sql);

	while($latlng = mysqli_fetch_array($result))
	{
		echo $latlng['latitute'].",".$latlng['longitude'].":";
	}

?>