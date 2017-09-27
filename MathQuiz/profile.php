<?php

	session_start();
	if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true)) $header='temps/header_log.php';
	else{
		header('temps/Location: index.php');
		exit();
	}
	
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
	<h1><?php echo $_SESSION['login'].$_SESSION['age']; ?></h1>
	
	
	
	
	<?php include 'temps/footer.php'; ?>
	
</body>

</html>