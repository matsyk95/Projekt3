<?php
// Inialize session
session_start();
if (!isset($_SESSION['zmienna'])) {
header('Location: index.php');
}
?><!DOCTYPE html>
<html lang="pl"> 
<head>
	<title>Login Form in PHP with Session</title>
	<meta charset="utf-8">
	<link href="style2_p3.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="cz1">
		<h1> Wpisane dane do formularza:</h1>
		<div id="wypisanedane">
		Imie™: <?php echo $_SESSION['name'];?><br>
		Nazwisko: <?php echo $_SESSION['surname'];?><br>
		Data urodzenia:	<?php echo $_SESSION['dataur'];?><br>
		Pesel: <?php echo $_SESSION['pesel'];?><br>
		Wiek: <?php echo $_SESSION['wiek'];?><br>
		Plec‡: <?php echo $_SESSION['plec'];?><br>
		Komentarz: <?php echo $_SESSION['komentarz'];?><br>
			
		</div>
	</div>
	<div id="cz2">
			Programowanie internetowe
			<a href="http://validator.w3.org/check?uri=referer">walidacjaHTML</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">walidacja CSS</a>
			<b id="logout"><a href="logout.php">Log Out</a></b>
		</div>
</body>
</html>	
