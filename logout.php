<?php
	session_start();
	//2 opties
	//unset($_SESSION['username']);
	session_destroy();
	header("location: product.php");
?>