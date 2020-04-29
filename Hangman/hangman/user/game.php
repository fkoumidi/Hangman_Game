<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	</head>

	 
<script type="text/javascript">
		//χρονομετρητης
		function startTimer(){
			var timer=sessionStorage.getItem("timerKey");
			var min=sessionStorage.getItem("minKey");
			var sec=sessionStorage.getItem("secKey");
			min=parseInt(timer/60);
			sec=parseInt(timer%60);
			
			if (timer<1){
				document.getElementById("time").innerHTML = "<b> Τέλος χρόνου </b>";
				if (timer==0)
				// μεθοδος alert
					{alert("Ο χρόνος σας έληξε, δυστυχώς δεν διεκδικείτε πλεον το Bonus")
						timer--;
						sessionStorage.setItem("timerKey", timer);
					}
			}
			else{
			document.getElementById("time").innerHTML = "<b> Χρόνος για το BONUS: </b>"+min.toString()+":"+sec.toString();
			timer--;
			sessionStorage.setItem("timerKey", timer);
			sessionStorage.setItem("minKey", min);
			sessionStorage.setItem("secKey", sec);
			setTimeout(function(){
				startTimer();
			}, 1000);
			}
		}
	</script>
<body onload="startTimer();">
	<div class="xronos"><table border="2" width="50%" bgcolor="#FFFF00" >
	  <tr>
	  	<td><span id="time"></span></td></tr></table></div>


<div class="game">
	
	<?php
	

		session_start();
		include('connect.php');
	
		include('logoutcheck.php');

	$_SESSION['refresh_check']=1;		
	
	if ($_SESSION['var_check']==1) //μεταβλητη var_check για να γινει η παρακατω διαδικασια μονο την πρωτη φορα που φορτωνει η σελιδα 
	{
	
		// ελεγχος αν υπαρχουν διαθεσιμες λεξεις για να παιξει
		$result3 =mysqli_query($link, "SELECT * FROM words ");
		    $number=mysqli_num_rows($result3) ;
					
			
			if($_SESSION['games']==$number)
				{header("Location:wait.php");}	
	
	
		include('word.php');
		
		$word=$_SESSION['the_word'];
		
		
			mb_internal_encoding("UTF-8");
		
			for ($i=0; $i<mb_strlen($word); $i++)
			 {
			 	$arrword[]=mb_substr($word,$i,1);
			 }
			 $_SESSION['arr1']=$arrword;
			
			 for ($i=0; $i<mb_strlen($word); $i++)
			 {
			 	$arrayword2[$i]="_";
			 }
			 $_SESSION['arr2']=$arrayword2;
			 
			 $_SESSION['num_of_wrongs']=-1;
			 
			 $lathoi = array("*","*","*","*","*","*");
			 $_SESSION['lathos']=$lathoi;
			 
	}	
	
	$_SESSION['var_check']=2;
	
	
		
		
		$letter = mb_strtoupper($_POST['letter']);
		$boolean= True;
		for($i=0; $i < sizeof($_SESSION['arr1']); $i++){
			if($letter == $_SESSION['arr1'][$i])
			{
				$_SESSION['arr2'][$i]=$letter;
				//$_SESSION['arr2']=$arrayword2;
				$_SESSION['arr2'][$i];
				$boolean= False;
			}
			
		}
	
		if ($boolean== True)
		{
			$_SESSION['lathos'][$_SESSION['num_of_wrongs']]=$letter;
			 $_SESSION['num_of_wrongs']+=1;
		}
		
		for($i=0; $i < sizeof($_SESSION['arr1']); $i++){
			if($_SESSION['arr2'][$i]=="_")
				{$game_check=False;
					break;
				}
			else
				{$game_check=True;}
		}
		
		if ($game_check==True)
			{ header('Location:bonuscheck.html');}
		
		if($_SESSION['num_of_wrongs']==6)
		{
			header('Location:lost_game.php');
		}
	
	
	
	 ?>
	 
	 
	 
	 
	 <h1><?php 
	 session_start();
	 echo "<h4>Βαθμοί λέξης: ".$_SESSION['words_points']."</h4>";
	 foreach ($_SESSION['arr2'] as $p)
			 {	 echo  "$p ";	}
	 
	 ?></h1>
	 <p><b>Αριθμός λαθών:<?php echo $_SESSION['num_of_wrongs'];?></b></p>
	 <p><b>Λάθος επιλογές:<?php 
	 foreach ($_SESSION['lathos'] as $m)
			 {	 echo  "$m    ";	}?></b></p>
			 
</div>		 
	<div class="image">
	<?php	include('image.php'); ?>
	 <form method="post" action="">
			Δώσε γράμμα:  <br />
			<input type="submit" name="letter" value="Α" class="but"/>
			<input type="submit" name="letter" value="Β" class="but"/>
			<input type="submit" name="letter" value="Γ" class="but"/>
			<input type="submit" name="letter" value="Δ" class="but"/>
			<input type="submit" name="letter" value="Ε" class="but"/>
			<input type="submit" name="letter" value="Ζ" class="but"/><br/>
			<input type="submit" name="letter" value="Η" class="but"/>
			<input type="submit" name="letter" value="Θ" class="but"/>
			<input type="submit" name="letter" value="Ι" class="but"/>
			<input type="submit" name="letter" value="Κ" class="but"/>
			<input type="submit" name="letter" value="Λ" class="but"/>
			<input type="submit" name="letter" value="Μ" class="but"/><br/>
			<input type="submit" name="letter" value="Ν" class="but"/>
			<input type="submit" name="letter" value="Ξ" class="but"/>
			<input type="submit" name="letter" value="Ο" class="but"/>
			<input type="submit" name="letter" value="Π" class="but"/>
			<input type="submit" name="letter" value="Ρ" class="but"/>
			<input type="submit" name="letter" value="Σ" class="but"/><br/>
			<input type="submit" name="letter" value="Τ" class="but"/>
			<input type="submit" name="letter" value="Υ" class="but"/>
			<input type="submit" name="letter" value="Φ" class="but"/>
			<input type="submit" name="letter" value="Χ" class="but"/>
			<input type="submit" name="letter" value="Ψ" class="but"/>
			<input type="submit" name="letter" value="Ω" class="but"/>
			</form><br/>
		</div>
		
	 </body>
</html>