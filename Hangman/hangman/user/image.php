<link rel="stylesheet" type="text/css" href="style.css" />


<?php  //επιλογη εικονας με βαση ποσα λαθη εχουν γινει
session_start();
include('connect.php');

	switch ($_SESSION['num_of_wrongs'])
	{
		case 0:
		?><img src="0.jpg"><?php
		break;
		case 1:
		?><img src="1.jpg"><?php
		break;
		case 2:
		?><img src="2.jpg"><?php
		break;
		case 3:
		?><img src="3.jpg"><?php
		break;
		case 4:
		?><img src="4.jpg"><?php
		break;
		case 5:
		?><img src="5.jpg" ><?php
		break;
		
	}



?>

