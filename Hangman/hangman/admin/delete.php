<?php
session_start();

include('connect.php');
if ($_SESSION['username']=='admin')
 {

	if ($_GET['id']) {
	
	$myid=$_GET['id'];
	
	
		$result = 	mysqli_query($link, "SELECT username FROM players Where id = '$myid' ");
			while ($row = mysqli_fetch_array($result))
					{$z=$row[0];}
			
				
			$result2 = mysqli_query($link, "DELETE  FROM history Where player='$z'");
					if (mysqli_affected_rows($link) > 0) {
							echo "Row deleted.";
							}
	
		$result3 = mysqli_query($link, "DELETE FROM players Where id = '$myid'");
		if (mysqli_affected_rows($link) > 0) {
			echo "Row deleted.";
			header('Location:admin-players.php');
		}
	}
 }
else
	{header('Location:1oMeros.php');}
?>