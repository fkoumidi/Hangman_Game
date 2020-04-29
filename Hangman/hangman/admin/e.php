<?php
session_start();
include('connect.php');

if ($_SESSION['username']=='admin')
 {
?>

<html>
	<head>
		
		<style type="text/css">
		<!--
		.style1 {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 14px;
			font-weight: bold;
		}
		-->
		</style>
		<link rel="stylesheet" type="text/css" href="file2.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	
	<?php
	if ($_POST['word']) {
	 //echo '<meta http-equiv="refresh" content="2;url=list.php">';
	}
	?>
	
	<body>
	<?php
	
	if ($_POST['word']) {
		$word_id = $_POST['word_id'];
		$word = $_POST['word'];
		$points = $_POST['points'];
		
	
		$result = mysqli_query($link, "UPDATE words set word='$word', points='$points' WHERE word_id = '$word_id'") or
				die("Query error: " . mysqli_error($link));
		echo "Row updated!";
		header('Location:admin-words.php');
		
	} else if ($_GET['word_id']) {
		$gid=$_GET['word_id'];
	
	
		$result = mysqli_query($link, "SELECT word_id, word, points FROM words Where word_id = '$gid'");
		while ($row = mysqli_fetch_array($result)) {
		?>
			
			<br/><br/><center><form action="" method="POST">
			<input name="word_id" type="hidden" value="<?=$row[0];?>">
			    <table width="40%" cellpadding="2" cellspacing="1" bgcolor="#999999">
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">Word: </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="word" type="text" value="<?php echo $row[1];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td bgcolor="#eeeeee">Points: </td>
			        <td bgcolor="#FFFFFF"><input name="points" type="text" value="<?=$row[2];?>" size="50"></td>
			      </tr>
			      <tr bgcolor="#FFFFFF">
			        <td colspan="2"><input name="submit" type="submit"></td>
			      </tr>
			    </table>
			</form>
			</center>
		
			<?php
	
		}
	}
	
	?>
	</body>
</html>
<?php
	}
	else
	{header('Location:1oMeros.php');}
?>