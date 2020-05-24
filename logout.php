<?php
include "include.php";
session_start();

	$x=$_SESSION['user'];
	$sel = "DELETE FROM login_details WHERE Email='$x'";
	mysqli_query($connec,$sel);
	
	$sel2 = "UPDATE user SET Timestamp = now() WHERE Email='$x'";
	mysqli_query($connec,$sel2);
	
	
	unset($_SESSION['user']);	

header('Location: index.php');
?>