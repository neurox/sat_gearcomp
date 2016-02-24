<?php

	$errores = '';
	$registrado = '';

	if(isset($_POST['submit']))
	{

		require_once('components/dbconfig.php');

		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$no_serie = $_POST['no_serie'];
		$cliente = $_POST['cliente'];

		if (!empty($marca))
		{
			$marca = trim($marca);
			$marca = filter_var($marca, FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores .= 'Por favor ingresa la marca <br />';
		}

		if (!empty($modelo))
		{
			$modelo = trim($modelo);
			$modelo = filter_var($modelo, FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores .= 'Por favor ingresa el modelo <br />';
		}

		if (!empty($no_serie))
		{
			$no_serie = trim($no_serie);
			$no_serie = filter_var($no_serie, FILTER_SANITIZE_STRING);
		}
		else
		{
			$errores .= 'Por favor ingresa un numero de serie <br />';
		}

		if (!empty($cliente))
		{
			$cliente = trim($cliente);
			$cliente = mysqli_real_escape_string($con, $cliente);

			$result = mysqli_query($con, "SELECT id FROM clientes WHERE id='$cliente'");

			if(mysqli_num_rows($result) == 0)
			{
				$errores .= 'No existe el cliente <br />';
			}
		}
		else
		{
			$errores .= 'Introduce un ID de cliente <br />';
		}

		if (!$errores)
		{
			$marca = mysqli_real_escape_string($con, $_POST['marca']);
			$modelo = mysqli_real_escape_string($con, $_POST['modelo']);
			$no_serie = mysqli_real_escape_string($con, $_POST['cliente']);
			$cliente = mysqli_real_escape_string($con, $_POST['cliente']);

			$fecha_registro = date("F, d Y");
			$status = "por-revisar";

			$query = "INSERT INTO equipos(marca, modelo, no_serie, fecha_registro, cliente, status) VALUES ('$marca', '$modelo', '$no_serie', '$fecha_registro', '$cliente', '$status')";

			if(mysqli_query($con, $query))
			{
				$registrado = true;
			}
			else
			{
				$errores .= 'Hubo un error con la base de datos, intenta mas tarde.';
			}

		}

	}

	require 'alta-equipos.view.php';

?>