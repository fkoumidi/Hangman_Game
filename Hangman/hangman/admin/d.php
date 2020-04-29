<?php
session_start();
include('connect.php');
if ($_SESSION['username']=='admin')
 {

	if ($_GET['word_id']) {
	
	$myid=$_GET['word_id'];
	
			$result = 	mysqli_query($link, "SELECT word FROM words Where word_id = '$myid' ");
			while ($row = mysqli_fetch_array($result))
					{$z=$row[0];}
			
				
			$result2 = mysqli_query($link, "DELETE  FROM history Where word='$z'");
					if (mysqli_affected_rows($link) > 0) {
							echo "Row deleted.";
							}

	
			$result3 = mysqli_query($link, "DELETE FROM words Where word_id = '$myid'");
			if (mysqli_affected_rows($link) > 0) {
				echo "Row deleted.";
				header('Location:admin-words.php');
		}
	}
	header('Location:admin-words.php');

}
else
	{header('Location:1oMeros.php');}
?>