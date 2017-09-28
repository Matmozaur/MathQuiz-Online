<?php include 'register.php'; ?>
<?php

	if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true)) $header='header_log.php';
	else $header='header_none_log.php';
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="Author" content="M.Dobrzański" />
	
	<title>Test matematyczny</title>
	
	<meta name="description" content="Test poziomujący z matematyki" />
	<meta name="keywords" content="matematyki,matematyka,test,quiz,poziomujący,sprawdź" />
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="logAndReg.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rum+Raisin" rel="stylesheet"> 
	
	<script src="jquery-1.11.3.min.js"></script>
	<script src="myjs.js"></script>

</head>



	<?php include 'temps/header_none_log.php'; ?>
	
	<main>
		<form id="singin" method="post">
							Podaj login
							<?php
							if (isset($_SESSION['e_login_login'])){
								echo $_SESSION['e_login'];
								unset($_SESSION['e_login']);
							}
							?>
							<br>
							<input name="login" type="text" placeholder="login"  onblur="this.placeholder=''"> 
							<br>	
							Podaj hasło
							<?php
							if (isset($_SESSION['e_pass'])){
								echo $_SESSION['e_pass'];
								unset($_SESSION['e_pass']);
							}
							?>
							<br>
							<input name="pass" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder=''" >
							<br>	
							Powtórz hasło
							<?php
							if (isset($_SESSION['e_pass'])){
								echo $_SESSION['e_pass'];
								unset($_SESSION['e_pass']);
							}
							?>
							<br>
							<input name="pass2" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder=''" >
							<br>
							Podaj maila
							<?php
							if (isset($_SESSION['e_mail'])){
								echo $_SESSION['e_mail'];
								unset($_SESSION['e_mail']);
							}
							?>
							<br>
							<input name="mail" type="text" placeholder="mail"  onblur="this.placeholder=''" >
							<br>
							Podaj wiek(nieobowiązkowe)
							<br>
							<input name="age" type="text" placeholder="wiek"  onblur="this.placeholder=''" >
							<br>
							Podaj rodzaj szkoły(nieobowiązkowe)
							<br>
							<select name="education" type="text" placeholder="rodzaj szkoły"  onblur="this.placeholder=''" >
							<option></option>
							<option>Szkoła podstawowa</option>
							<option>Gimnazjum</option>
							<option>Liceum</option>
							<option>Technikum</option>
							<option>Szkoła zawodowa</option>
							<option>Studia</option>
							<option>Inne</option>
							</select>
							<br>
							Podaj uczelnie(nieobowiązkowe)
							<br>
							<select name="uniwersity" type="text" placeholder="uczelnia"  onblur="this.placeholder=''" >
							<option></option>
							<option>AGH</option>
							<option>UW</option>
							<option>PW</option>
							<option>UJ</option>
							<option>PWr</option>
							<option>Uwr</option>
							<option>UG</option>
							<option>UAMP</option>
							<option>PG</option>
							<option>PB</option>
							<option>KUL</option>
							<option>PL</option>
							<option>UŁ</option>
							<option>PŁ</option>
							<option>UEK</option>
							<option>SGH</option>
							<option>PJSTK</option>
							<option>UR</option>
							<option>PR</option>
							<option>Inna</option>
							</select>
							<br>
							<input type="submit" value="Zarejestruj się">
		</form>
	
	</main>
	
	<?php include 'temps/footer.php'; ?>
	
</body>
</html>