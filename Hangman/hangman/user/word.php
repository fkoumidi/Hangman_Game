<?php
	session_start();
	include('connect.php');
	unset($_SESSION['the_word']);
	unset($_SESSION['words_points']);
	$_SESSION['games']++;
	$_SESSION['lost']++;
	start:

	$result = 	mysqli_query($link, "SELECT * FROM words ");
	$number=mysqli_num_rows($result) ;
	
	// επιλογή λέξης, τυχαία από τη βάση
	
	$word_rand=rand(1,$number);
	echo '<br />';


	$i=0;
	while ($row = mysqli_fetch_array($result))
	{	$i+=1;
		if( $i==$word_rand)
		{$_SESSION['the_word']=mb_strtoupper($row[1]);
		 $_SESSION['words_points']=$row[2];	
		  break;}
	}
	
	$x=$_SESSION['username'];
	$y=$_SESSION['the_word'];
	
	
	// έλεγχος αν έχει ξαναπαίξει την ίδια λέξη
	$result2 = 	mysqli_query($link, "SELECT player FROM history WHERE word='$y' ");
	while ($row2 = mysqli_fetch_array($result2))
		{
			if( $row2[0]==$x) 
				goto start;
				
		}
	
	
	
	$query ="INSERT INTO history VALUES (NULL,'$y','$x')";
		mysqli_query($link, $query);
		
	
	
	
?>