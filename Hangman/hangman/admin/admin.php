<html>
	<head>
		<link rel="stylesheet" type="text/css" href="file2.css" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	</head>
	 
	<body>

<div class="admincss" >

<?php
session_start();
 if ($_SESSION['username']=='admin')
 {
echo "Επιτυχής σύνδεση,καλωσήρθες ". $_SESSION['username']. "<br /> ";
echo "Επελέξε τι θέλεις να κάνεις: ";

?>

<br><a href="admin-players.php"><b>Διαχείρηση παικτών </b></a><br>
<br><a href="admin-words.php"><b>Διαχείρηση λέξεων</b></a><br>


<form action="logout.php" method="POST"> 
   
    <p><input type="submit" name="LogOut" value="LogOut"  class="button"></p> 
</form>
</div>
<?php
	}
	else
	{header('Location:1oMeros.php');}
?>

</body>
</html>