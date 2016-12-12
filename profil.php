<?php
// Inialize session
session_start();
include('dane.php'); // Includes Login Script
if (!isset($_SESSION['zmienna'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Formularz </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
	<link rel="stylesheet" type="text/css" href="style4.css"> 
	<script src="script_form.js"></script>
</head>
<body>
	<form method="post" name="form" enctype="multipart/form-data" onsubmit="return(sprawdz())" >
	<h1 class="center"> Formularz </h1>
	<p>Programowanie Internetowe</p>
	<table class="formularz">
	<tr>
		<td colspan="2" class="naglowek">Dane osobowe:		</td>
	</tr>
	<tr>
		<td class="tytul"> Imie: </td> <td class="pole"><input type="text" class="text" name="imie" onchange="poleTekstowe(value)" required /> </td>
	</tr>
	<tr>
		<td class="tytul"> Nazwisko: </td><td class="pole"><input type="text" class="text" name="nazwisko" onchange="poleTekstowe(value)" required  /> </td>
	</tr>
	<tr>
		<td class="tytul"> Data urodzenia: </td> <td class="pole"><input type="date" name="ur" id="urDat" style="width:147px" onchange="wypelnijWiek()" required /> </td>
	</tr>
	<tr>
		<td class="tytul"> Wiek: </td><td class="pole"><input type="text" class="text" name="wiek" id="wiekId" readonly  /> </td>
	</tr>
	<tr>
		<td class="tytul"> PESEL: </td><td class="pole"><input type="text" id="peselId" name="pesel" pattern=".{11,11}" required title="pesel ma 11 cyfr" onkeypress="return tylkoCyfry(event)" onchange="sprawdzPesel()" /> </td>
	</tr>
	<tr>
		<td class="tytul"> PĹ‚eÄ‡: </td>
		<td class="pole"><select name="plec">
			<option value="Kobieta">Kobieta</option>
			<option value="MÄ™ĹĽczyzna">MÄ™ĹĽczyzna</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="tytul"> Kierunek studiĂłw: </td>
		<td class="pole">
		<input type="radio" name="Informatyka" value="informatyka" checked="checked" /> Informatyka
		<input type="radio" name="Automatyka" value="automatyka"  /> Automatyka
		<input type="radio" name="Elektrotechnika" value="elektrotechnika" /> Elektrotechnika
		</td>
	</tr>
	<tr>
		<td class="tytul"> Plik: </td><td class="pole"><input type="file" name="plik" id="plikId" accept=".jpg, .tif, .png" /><br /> </td>
	</tr>
	
	<tr>
		<td colspan="2" class="naglowek">Dodatkowe informacje:</td>
	</tr>
	<tr>
		<td colspan="2"><textarea name="komentarz" rows="5" cols="50" onkeyup="MaxRozmiar()" maxlength="255"></textarea></td>
	</tr>
		<tr>
		<td class="tytul"> ZostaĹ‚o </td><td class="pole"><input type="text" id="licznik" value="255" readonly /><br /></td>
	</tr>

	<tr>
		<td colspan="2" class="przycisk"><input name="submit" type="submit" value="WyĹ›lij formularz"></td>
	</tr>
	<tr><td colspan="2">
	
		<input type="checkbox" name="zgoda" id="zgoda" checked>
		<label for="zgoda">Zgadzam siÄ™ na przetwarzanie moich danych osobowych w celu wysyĹ‚ania mi tysiÄ…cy spamu i dla procesu rejestracyjnego wycieczki.</label><span class="req">*</span>
	
	</td>
	</tr>
	</table>
	</form>
<div class="P">
	<a href="https://validator.w3.org/nu/#file">
	<img src="https://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="Poprawny HTML5" title="Poprawny HTML5">

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Poprawny CSS!" />
    </a>
	<b id="logout"><a href="logout.php">Log Out</a></b>
	
</div>
</body>
</html>
