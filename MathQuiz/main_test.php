<?php include 'overall_testing.php'; ?>
<?php

	session_start();
	if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true)) $header='temps/header_log.php';
	else $header='temps/header_none_log.php';
	
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

<body>
	<?php include $header; ?>
	<?php
	if(isset($_SESSION['miss'])){
		echo $_SESSION['miss'];
		unset($_SESSION['miss']);
	}
	?>
	<main>
		<form id="teststart"  method='post' >
								
								Podaj wiek</br>(nieobowiązkowe)
								</br>
								<input name="age" type="text" placeholder="wiek"  onblur="this.placeholder=''" >
								</br>
								</br>
								Podaj rodzaj szkoły</br>(nieobowiązkowe)
								</br>
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
								</br>
								
								</br>
								<input name="A" type="submit"  value="Rozpocznij test">
								<input name="B" type="submit"  value="Rozpocznij test">
								<input name="age" type="submit"  value="Rozpocznij test">
								<input name="age" type="submit"  value="Rozpocznij test">
								<input name="age" type="submit"  value="Rozpocznij test">
			</form>
	</main>
	
	
	
	<?php include 'temps/footer.php'; ?>
	
</body>

</html>