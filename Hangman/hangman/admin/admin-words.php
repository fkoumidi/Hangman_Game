<link rel="stylesheet" type="text/css" href="file2.css" />
<?php
session_start();
include('connect.php');

if ($_SESSION['username']=='admin')
 {
	$result = 	mysqli_query($link, "SELECT * FROM words ");

?>	
   <center><br/><br/>
    <p>ΛΕΞΕΙΣ ΠΑΙΧΝΙΔΙΟΥ</p>
    <table width="50%" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
	  <tr bgcolor="#999999">
	  	<td>Word </td>
		<td>Points</td>
	  </tr>
<?php	
	while ($row = mysqli_fetch_array($result)) {
?>	
		<tr><td bgcolor="#FFFFFF">
	    <?=$row[1]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[2]?>
		</td>
		<td bgcolor="#FFFFFF">
			<a href='e.php?word_id=<?=$row[0]?>' class="style15">Edit</a>
	
		</td>
		<td bgcolor="#FFFFFF">
			<a href='d.php?word_id=<?=$row[0]?>'>Delete</a>
	
		</td>
		</tr>
<?php
	}
?>
</table>

<form action="nea_leksi.php" method="POST"> 
   
    <p><input type="submit" name="LogOut" value="εισαγωγή νέας λέξης"></p> 
</form>
<form action="admin.php" method="POST"> 
   
    <p><input type="submit" name="LogOut" value="επιστροφή στην αρχική σελίδα διαχείρησης"></p> 
</form>
</center>
<?php
}
	else
	{header('Location:1oMeros.php');}
	mysqli_close($link);
?>


