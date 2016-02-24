<?php
	
	require_once('head.php');

	if($header === "")
	{
		require_once('components/header.php');
	}
	else
	{
		require_once('components/headers/'.$header);
	}

?>