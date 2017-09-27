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
		<article>
			<section class="startpage">
				<div class="welcome">
					<h1>Witaj u Matmozaura</h1>
					Zapraszam Cie do spróbowania sił w naszym nowatorskim teście poziomującym z matematyki dzieki któremu 
					lepiej zorientujesz się ile juz umiesz a ile jeszcze musisz sie nauczyć aby osiągnąc swój cel.
					Nie czekaj i wybierz test który Cię interesuje!
					<br>
					<br>
					<a href="overalltest.php" class="overalltest">Ogólny test poziomujący</a>
				</div>
					
			</section>
			<section class="descriptions">
				<h2 class="levels">Opisy poziomów (ogólny test poziomujący):</h2>
				<div class="leveldescript">
					<div class="lvlicon">A1</div>
					<div class="descript">
					xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">A2</div>
					<div class="descript">
					xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">B1</div>
					<div class="descript">
					xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">B2</div>
					<div class="descript">
					xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">C1</div>
					<div class="descript">
					xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">C2</div>
					<div class="descript">
					xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">S</div>
					<div class="descript">
					xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					</div>
				</div>
			</section>
		</article>
	</main>
	
	
	
	<?php include 'temps/footer.php'; ?>
	
</body>

</html>