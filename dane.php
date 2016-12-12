<?php
			session_start(); // Starting Session
			$error=''; // Variable To Store Error Message
			if (isset($_POST['submit'])) {
				$_SESSION['name'] = $_POST['imie'];
				$_SESSION['surname'] = $_POST['nazwisko'];
				$_SESSION['dataur'] = $_POST['ur'];
				$_SESSION['pesel'] = $_POST['pesel'];
				$_SESSION['wiek'] = $_POST['wiek'];
				$_SESSION['plec'] = $_POST['plec'];
				$_SESSION['kierunek'] = $_POST['kierunek'];
				$_SESSION['komentarz'] = $_POST['koment'];
				header("location: print.php");
			}
		?>
