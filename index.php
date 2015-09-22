<?php
	$user = $_SERVER["SSL_CLIENT_S_DN_CN"];
	if ($_SERVER["SSL_CLIENT_VERIFY"] != "SUCCESS") {
		echo "string";
		echo $_SERVER["SSL_CLIENT_S_DN_CN"];
	}
	else {
		//die("You are now logged in. Please <a href='inventory.php'>" ."click here</a> to continue<br><br>");
		//session_start();
		header("location:inventory.php");
	}
?>