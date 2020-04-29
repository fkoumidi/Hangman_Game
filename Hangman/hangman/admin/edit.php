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
	if ($_POST['firstname']) {
	 //echo '<meta http-equiv="refresh" content="2;url=list.php">';
	}
	?>
	
	<body>
	<?php
	
	if ($_POST['firstname']) {
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$scor = $_POST['scor'];
		$games = $_POST['games'];
		$won = $_POST['won'];
		$lost = $_POST['lost'];
		
	
		$result = mysqli_query($link, "UPDATE players set firstname='$firstname', lastname='$lastname', username='$username', password='$password', scor='$scor', games='$games', won='$won', lost='$lost' WHERE id = '$id'") or
				die("Query error: " . mysqli_error($link));
		echo "Row updated!";
		header('Location:admin-players.php');
		
	} else if ($_GET['id']) {
		$gid=$_GET['id'];
	
	
		$result = mysqli_query($link, "SELECT * FROM players Where id = '$gid'");
		while ($row = mysqli_fetch_array($result)) {
		?>
		
			<form action="" method="POST"  class="table" >
			<input name="id" type="hidden" value="<?=$row[0];?>">
			 <table width="40%"  cellpadding="2" cellspacing="1" bgcolor="#FFCC33">
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">FirstName: </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="firstname" type="text" value="<?php echo $row[1];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td bgcolor="#eeeeee">Lastname: </td>
			        <td bgcolor="#FFFFFF"><input name="lastname" type="text" value="<?=$row[2];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">Username: </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="username" type="text" value="<?php echo $row[3];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">Password: </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="password" type="text" value="<?php echo $row[4];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">Scor: </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="scor" type="text" value="<?php echo $row[5];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">Games: </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="games" type="text" value="<?php echo $row[6];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">Won: </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="won" type="text" value="<?php echo $row[7];?>" size="50"></td>
			      </tr>
			      <tr>
			        <td width="30%" bgcolor="#eeeeee">Lost </td>
			        <td width="70%" bgcolor="#FFFFFF"><input name="lost" type="text" value="<?php echo $row[8];?>" size="50"></td>
			      </tr>
			      <tr bgcolor="#FFFFFF">
			        <td colspan="2"><input name="submit" type="submit"></td>
			      </tr>
			    </table>
			</form>
		
	
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