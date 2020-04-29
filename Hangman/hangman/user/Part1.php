

<link rel="stylesheet" type="text/css" href="style.css" />
<div class="part1">
<?php
	session_start();
	include('connect.php');



	$x= $_POST['firstname'];
	$y= $_POST['lastname'];
	$z= $_POST['username'];
	$w= $_POST['password'];
	
	$player_check=True;
	$result = 	mysqli_query($link, "SELECT username, password FROM players");
	$row = mysqli_fetch_array($result);
	
	while ($row = mysqli_fetch_array($result))
	{
		if ($row['username']==$z || $row['password']==$w)
			{
				echo "<br/><h3><b>Kάποιo από τα στοιχεία που έδωσες (username Ή password) υπάρχει ήδη.<br/>Επομένως δεν μπορεί να ολοκληρωθεί η εγγραφη.
					<br/>Επέστρεψε στη αρχική σελίδα και ξαναπροσπάθησε</b></h3>";
				?>	<br><a href='1oMeros.php'>Αρχική Σελίδα</a><br><br>  <?php
				$player_check=False;
				break;
			}
	}
	
	
	
	
	if ($player_check==True)
		{
		$query = "INSERT INTO players VALUES (NULL,'$x', '$y','$z', '$w',0,0,0,0)";
			
			mysqli_query($link, $query);
			if (mysqli_affected_rows($link) == 1) {
			echo "<br/><h2><b>Επιτυχής εγγραφή<br/>
				Για να συνδεθείς επέστρεψε στην αρχική σελίδα</h3></br>" ;
			} else {
			print "<h3>Η εγγραφή απέτυχε,προσπαθήστε ξανά</h3>";
			}
			mysqli_close ($link);
			
?>
			<a href='1oMeros.php'>Αρχική σελίδα</a>
<?php
		}
	
?>	

</div>
	
	
	
