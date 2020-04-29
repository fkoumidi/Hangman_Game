<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <script type="text/javascript">
		var timer=60;
		var min=0;
		var sec=0;
		sessionStorage.setItem("timerKey", timer);
		sessionStorage.setItem("minKey", min);
		sessionStorage.setItem("secKey", sec);
</script>
	<style type="text/css">
		body {
			background-image: url('the-Hangman-logo.png');
			background-repeat: no-repeat;
			background-position: center center; 
			background-size:90% 90%;
		
			
			}
			
		.p {
			position: relative;
			left: 5%;
			top:24%;
			font-size:1em;
			width:50%;
			
		}
		
	</style>
	 
	
	 <body bgcolor="#3399ff" >
	 <!-- backgroud --> 

	<div class="p">
	
		<left> 
			
		 	<form method="post"  action="Part2.php">
		 	<table border=0 width=400 
		 		bgcolor="" cellspacing=10>
		 		<caption> <h3><b>Σύνδεση στο παιχνίδι </b></h3></caption>
		 		<tr>
		 			<td>Username:</td>
		 			<td><input type="text" name="username" placeholder="enter your username" required />	</td></tr>
		 		<tr>
		 			<td>Password:</td>
		 			<td><input type="password" name="password" placeholder="enter your username" required autocomplete="off" />	</td>
		 			</tr>
		 		<tr>
		 		
		 	<tr><td>	<input type= "submit" value="Σύνδεση"></td></tr>
		 	</table>
		 	</form>
		 	</left>
	 	
			
		 	<left>
		 	<form  method="POST" action="Part1.php">
		 	<table border=0 width=400 
		 		bgcolor="" cellspacing=10>
		 		<caption> <h3><b>Εγγραφή στο παιχνίδι </b></h3></caption>
		 		<tr>
		 			<td>Firstname: </td>
		 			<td><input type="text" name="firstname" placeholder="firstname" required autocomplete="off"/> </td></tr>
		 		<tr>
		 			<td>Lastname: </td>
		 			<td><input type="text" name="lastname" placeholder="lastname" required autocomplete="off"/>	</td></tr>
		 		<tr>
		 			<td>Username:</td>
		 			<td><input type="text" name="username" placeholder="username" required autocomplete="off"/>	</td></tr>
		 		<tr>
		 			<td>Password:</td>
		 			<td><input type="text" name="password" placeholder="password" required autocomplete="off"/>	</td>
		 			</tr>
		 		<tr>
		 		
		 	<tr><td>	<input type= "submit" value="Εγγραφή"></td></tr>
		 	</table>
		 	</form>
		 	</left>
			<p><b><i><u>Σημείωση</u>:Σας προτείνουμε για καλύτερη και ομαλή λειτουργία,<br/>
			κατά την διάρκεια παραμονή σας στον ιστότοπο να μην χρησιμοποιήσετε <br/>τις επιλογές "εμπρός" - "πίσω" -"ανανέωση"
			από τον browser.<br/>Για οποιδήποτε ενέργεια υπάρχουν τα σχετικά links και επιλογές εντός του ιστότοπου</i></b></p>
		</div>
	 </body>
</html>	 