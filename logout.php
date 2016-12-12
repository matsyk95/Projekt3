<?php
session_start();
	if(isset($_SESSION['login_user'])){
		unset($_SESSION['login_user']);
	}
	if(session_destroy() || session_unset() ) // Destroying All Sessions
	{
		header("Location: index.php"); // Redirecting To Home Page
	}
?>
