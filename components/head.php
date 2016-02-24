<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?=$description;?>">
	<meta name="keywords" content="<?=$keywords;?>">
	<meta name="author" content="Neurox Gómez">
	<title><?= $title; ?></title>
	<!--Estilos-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Estilos solo para la pagina actual-->
	<?php if(isset($styles))echo$styles; ?>
</head>
<body>

