<?php
session_start();

if (!isset($_SESSION['email']))
{
	
	// redirect to login page
	header("location:index.php");
	
}

?>
