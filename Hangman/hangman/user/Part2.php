<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	</head>
	 
	<body>
		<div class="part2">
		
		
	<?php
	session_start();
	include('connect.php');

	$x= $_POST['username'];
	$y= $_POST['password'];
	
	$_SESSION['var_check']=1;
    
	$result = 	mysqli_query($link, "SELECT username, password ,scor, games, won, lost FROM players WHERE username='$x' and password='$y'");
	$row = mysqli_fetch_array($result);
	
	// έλεγχος στοιχείων εισόδου
	if ($row['username']==$x && $row['password']==$y)
	{ 
		$_SESSION['username'] = $row['username'];
		$_SESSION['scor']=$row['scor'];
		$_SESSION['games']=$row['games'];
		$_SESSION['won']=$row['won'];
		$_SESSION['lost']=$row['lost'];
		
		$_SESSION['logoutcheck'] = $row['username'];
		
		// έλεγχος αν ειναι ο admin
		if ($row['username']=='admin')
			{
				header("Location:admin.php");
			}
		else
		{	 
		
			include('logoutcheck.php');
			?>
			
			 <?php
			 echo "<br/><br/>Kαλωσήρθες: <i>". $row['username'] ."</i><br/>";
			 echo "Σκορ: ". $row['scor']. "    , Παιχνίδια: ". $row['games']."<br/>";
			 ?>
			 <br><div><pre><a href='game.php'>Παίξε</a>&#9;<a href='logout.php'>Αποσύνδεση</a></pre></div>	
			
			 
			<p><b><u>Πληροφορίες σχετικά με το παιχνίδι:</u></b><br/><br>1)Ψάχνετε να βρείτε τη λέξη.Παίζετε μόνο με ελληνικές λέξεις<br>2)Κάθε παύλα αντιστοιχεί σε κάποιο ελληνικό χαρακτήρα<br>3)Κάθε φορά δίνετε ένα γράμμα 
			<br>4)Μπορείτε να κάνετε εώς 6 λάθη <br/><b>5)Αν βρείτε τη λέξη σε λιγότερο απο 1 λεπτό κερδίζετε 20 επιπλέον βαθμούς</b></p>
			
			 <?php
		}
	}
	else
	{ echo "<br/><h2><b>Ανεπιτυχής σύνδεση,προσπάθησε ξανά</b></h2>";
		?>	<br><a href='1oMeros.php'>Αρχική Σελίδα</a><br><br><?php
		
	}
	mysqli_close($link); 
	
	echo "<br />"
	?>
	

	
	</div>
</body>
</html>