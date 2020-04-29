<?php

	$link = @mysqli_connect(...............);
	if (mysqli_connect_error()) {
	die('Could not connect to the database '.
	mysqli_connect_error()) ;
	}
	
	mysqli_query($link, " SET NAMES utf8 COLLATE utf8_general_ci");
?>