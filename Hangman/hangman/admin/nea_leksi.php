<link rel="stylesheet" type="text/css" href="file2.css" /><?php
session_start();
include('connect.php');

if ($_SESSION['username']=='admin')
 {


	
	if (!isset($_POST['submit'])){
	?>
	<div class="table">
	<form method='POST' action="">  
	    <h2>Δώσε τη νέα λέξη:</h2>  
		 <input type="text" name="word"> 
		<h2>Δώσε τους βαθμούς:</h2>  
		 <input type="text" name="points"> 
		<p> <input type="submit" name="submit" value="Submit"> </p> 
		</form> 
		</div>
	<?php
	
	}else{ 
	
			$x= $_POST['word'];
			$y= $_POST['points'];
			
			
			
			
			$query = "INSERT INTO words VALUES (NULL,'$x', '$y')";
			
			mysqli_query($link, $query);
			if (mysqli_affected_rows($link) == 1) {
			print "Insert into words was successful";
			} else {
			print "Insert into words failed!";
			}
			
			header('Location:admin-words.php');
		}



	}
else
	{header('Location:1oMeros.php');}
?>