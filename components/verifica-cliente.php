<?php

	require_once('dbconfig.php');

	$result = mysqli_query($con, "SELECT * FROM clientes WHERE id ='".$_POST["cliente"]."'");  

	if(mysqli_num_rows($result) == 1)
	{
		while($row = mysqli_fetch_array($result))
		{
			echo $row['apellido_pat'] . "<br />";
			echo $row['apellido_mat'] . "<br />";
			echo $row['nombre'] . "<br />";
			echo $row['domicilio'] . "<br />";
			echo $row['email'] . "<br />";
		}
	}
	else
	{
		echo "No existe el cliente";
	}
?>