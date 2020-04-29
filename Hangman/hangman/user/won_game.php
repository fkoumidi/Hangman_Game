<script type="text/javascript">
		var timer=60;
		var min=0;
		var sec=0;
		sessionStorage.setItem("timerKey", timer);
		sessionStorage.setItem("minKey", min);
		sessionStorage.setItem("secKey", sec);
</script><?php
session_start();
	include('connect.php');
?>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<div class="part2">
<?php
	
	if($_SESSION['refresh_check']==1)
	{
	include('logoutcheck.php');
		$_SESSION['scor'] +=$_SESSION['words_points'];
		$_SESSION['won']++;
		$_SESSION['lost']--;
	
		$x=$_SESSION['games'];
		$y=$_SESSION['username'];
		$z=$_SESSION['scor'];
		$w=$_SESSION['won'];
		
		$result = mysqli_query($link, "UPDATE players set games='$x', scor='$z',won='$w' WHERE username = '$y' ") or
				die("Query error: " . mysqli_error($link));
					
		$_SESSION['refresh_check']=2;	
	}
	
?>

<?php
	echo "<br/><br/>ΣΥΓΧΑΡΗΤΗΡΙΑ , βρήκες την κρυμμένη λέξη: ".$_SESSION['the_word']."<br/>
			Κέρδισες ".$_SESSION['words_points']." βαθμούς<br/>
			To σκορ σου τώρα είναι ".$_SESSION['scor']." και έχεις παίξει ".$_SESSION['games']." παιχνίδια";
	
		
		$_SESSION['var_check']=1;
		unset($_SESSION['arr1']);
		unset($_SESSION['arr2']);
		unset($_SESSION['num_of_wrongs']);
		unset($_SESSION['lathos']);
		echo "<br><div><h3><pre><a href='game.php'>Παίξε</a>&#9;<a href='logout.php'>Αποσύνδεση</a></pre></h3></div>";
	
?>
</div>
	