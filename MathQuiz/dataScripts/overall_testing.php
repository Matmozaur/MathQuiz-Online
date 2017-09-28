<?php
	session_start();
	if(isset($_POST['Ans'])) {
		$_SESSION['counter']++;
	}
	header('Location: ../main_test.php');
?>