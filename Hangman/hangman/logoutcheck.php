<?php   //για να μην επιτρεπει να πανε πισω οταν κανουμε αποσυνδεση
 if($_SESSION['username']==$_SESSION['logoutcheck'])
 { $t=0;}
 else
 { header('Location:1oMeros.php');}
?>