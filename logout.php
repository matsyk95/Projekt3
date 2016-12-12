<?php
session_start();
	if(isset($_SESSION['zmienna'])){
		unset($_SESSION['zmienna']);
	}
	if(session_destroy() || session_unset() ) // Destroying All Sessions
	{
		header("Location: index.php"); // Redirecting To Home Page
	}
?>
