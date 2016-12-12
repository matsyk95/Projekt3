<?php
include('mob.php');
include('logowanie.php'); 
if(isset($_SESSION['login_user'])){
	header("location: profil.php");
}
?>
<!DOCTYPE html>
<html lang="pl"> 
<head>
	<title>Logowanie , Projekt 3</title>
	<meta charset="utf-8">
	<link href="sytle1_pr3.css" rel="stylesheet" type="text/css">
</head>
<body>
	
		<h1>Mobilna strona z PHP</h1>
		<div id="login">
			<h2>Logowanie</h2>
			<form method="post">
				<label>Nazwa uzytkownika :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password">
				<input name="submit" type="submit" value=" Login ">
				<span><?php echo $error; ?></span>
			</form>
		

		
	</div>
 <p class="center">	

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Poprawny CSS!" />
    </a>

	<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~sykutm%2Findex.php">
	<img src="https://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="Poprawny HTML5" title="Poprawny HTML5">
	</a>
	</p>
</body>
</html>
