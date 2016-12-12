<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Haslo jest bledne";
	}
	else
	{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$username = stripslashes($username);
		$password = stripslashes($password);
		$validuser = "student";
		$validpass = "zet";
		
		if ($username === $validuser && $password === $validpass) {
			$_SESSION['zmienna']=$username; // Initializing Session
			header("location: profile.php"); // Redirecting To Other Page
		} else {
			$error = "Hasło jest błedne ";
		}
		
	}
}
?>
