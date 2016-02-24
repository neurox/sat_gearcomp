<?php

	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = 'toor';
	$dbName = 'sat_gearcomp';

	$con = mysqli_connect(
		$dbHost,
		$dbUsername,
		$dbPassword,
		$dbName
	);

	if(mysqli_connect_errno())
	{
		echo "Database error";
	}
	
?>