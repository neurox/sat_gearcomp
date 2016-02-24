<?php

	$con = mysqli_connect(
		"localhost",
		"root",
		"toor",
		"sat_gearcomp"
	);

	mysqli_query ($con,"SET NAMES 'utf8'");

	if(mysqli_connect_errno())
	{
		echo "Database error";
	}
	
?>