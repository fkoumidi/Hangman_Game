<link rel="stylesheet" type="text/css" href="file2.css" />
<?php
session_start();
include('connect.php');

if ($_SESSION['username']=='admin')
 {
	$result = 	mysqli_query($link, "SELECT * FROM players");

?>	
   
    <br/><p><center>ΛΙΣΤΑ ΠΑΙΚΤΩΝ</center> </p>
    <center><table width="100%" cellpadding="6" cellspacing="9" bgcolor="#CCCCCC">
	  <tr bgcolor="#999999">
	  	<td>firstname </td><td>lastname</td><td>username </td><td>password</td><td>scor </td><td>games</td><td>won </td><td>lost</td>
		
	  </tr>
<?php	
	while ($row = mysqli_fetch_array($result)) {
?>	
		<tr><td bgcolor="#FFFFFF">
		<?=$row[1]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[2]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[3]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[4]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[5]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[6]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[7]?>
		</td><td bgcolor="#FFFFFF">
		<?=$row[8]?>
		</td>
		<td bgcolor="#FFFFFF">
			<a href='edit.php?id=<?=$row[0]?>' class="style15">Edit</a>
	
		</td>
		<td bgcolor="#FFFFFF">
			<a href='delete.php?id=<?=$row[0]?>'>Delete</a>
	
		</td>
		</tr>
<?php
	}
?>
</table></center>
<form action="admin.php" method="POST"> 
   
    <p><input type="submit" name="LogOut" value="επιστροφη στην αρχικη σελιδα διαχειρησης"></p> 
</form>
<?php
}
	else
	{header('Location:1oMeros.php');}
	mysqli_close($link);
?>