<?php
	session_start();
	if(isset($_POST['education'])){
		$_SESSION['age']=$_POST['age'];
		$edu=$_POST['education'];
		$uni=$_POST['uniwersity'];
		header('Location: main_test.php');
		require_once "myData.php";

		$connect = @new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($connect, "SET CHARSET utf8");
		mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		if ($connect->connect_errno!=0)
		{
			echo "Error: ".$connect->connect_errno;
		}
		else
		{
			if ($result = @$connect->query(
			sprintf("SELECT * FROM questions ")))
			{
						$row = $result->fetch_assoc();
						$_SESSION['question'] =$row['QText'];
						$_SESSION['ansA'] = $row['QAnswerA'];
						$_SESSION['ansB'] = $row['QAnswerB'];
						$_SESSION['ansC'] = $row['QAnswerC'];;
						$_SESSION['ansD'] = $row['QAnswerD'];
						$_SESSION['correct'][1] = $row['Correct'];
						$result->free_result();
				
			}
			
			$connect->close();
		}
		//header('Location: main_test.php');
	}
?>