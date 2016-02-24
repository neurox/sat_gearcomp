<?php

	$con = mysqli_connect(
		"localhost",
		"root",
		"toor",
		"sat_gearcomp"
	);

	if(mysqli_connect_errno())
	{
		echo "Database error";
	}
	
?>