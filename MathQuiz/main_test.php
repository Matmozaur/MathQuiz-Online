
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
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/logAndReg.css">
	<link rel="stylesheet" href="css/testMain.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rum+Raisin" rel="stylesheet"> 
	<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
	</script>
	<script type="text/javascript"
	src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
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
		<form id="testMain" action='dataScripts/overall_testing.php'  method='post' >
								<?php echo $_SESSION['counter']+1; ?>/25
								<h2><?php echo $_SESSION['question'][$_SESSION['counter']]; ?> <h2>
								<input name="Ans" type="submit"  value="A"> <?php echo $_SESSION['ansA'][$_SESSION['counter']]; ?>
								</br>
								<input name="Ans" type="submit"  value="B"> <?php echo $_SESSION['ansB'][$_SESSION['counter']]; ?>
								</br>
								<input name="Ans" type="submit"  value="C"> <?php echo $_SESSION['ansC'][$_SESSION['counter']]; ?>
								</br>
								<input name="Ans" type="submit"  value="D"> <?php echo $_SESSION['ansD'][$_SESSION['counter']]; ?>
								</br>
								<input id="nope" name="Ans" type="submit"  value="Nie wiem">
			</form>
	</main>
	
	
	
	<?php include 'temps/footer.php'; ?>
	
</body>

</html>