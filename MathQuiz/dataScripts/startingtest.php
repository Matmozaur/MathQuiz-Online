<?php
	session_start();
	if(isset($_POST['education'])){
		$_SESSION['age']=$_POST['age'];
		$_SESSION['education']=$_POST['education'];
		$_SESSION['uniwersity']=$_POST['uniwersity'];
		$lvl='B1';
		$_SESSION['lvlnum']=5;
		switch($_SESSION['education']){
			case 'Szkoła podstawowa': $lvl='A1';$lvlnum=1; break;
			case 'Gimnazjum': $lvl='A2';$lvlnum=3; break;
			case 'Szkoła zawodowa': $lvl='A2';$lvlnum=3; break;
			case 'Studia': $lvl='B2';$lvlnum=7; break;
			case 'Inne': $lvl='B2'; $lvlnum=7; break;
		}
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
			sprintf("SELECT * FROM questions WHERE Level='$lvl'")))
			{			$_SESSION['question']=tab1[5];
						$_SESSION['ansA']=tab2[5];
						$_SESSION['ansB']=tab3[5];
						$_SESSION['ansC']=tab4[5];
						$_SESSION['ansD']=tab5[5];
						$_SESSION['correct']=tab6[5];
						$_SESSION['lvlgood']=tab7[13];
						$_SESSION['lvlbad']=tab8[13];
						for($i=0;$i<5;$i++){
							$row = $result->fetch_assoc();
							$_SESSION['question'][$i] =$row['QText'];
							$_SESSION['ansA'][$i] = $row['QAnswerA'];
							$_SESSION['ansB'][$i] = $row['QAnswerB'];
							$_SESSION['ansC'][$i] = $row['QAnswerC'];;
							$_SESSION['ansD'][$i] = $row['QAnswerD'];
							$_SESSION['correct'][$i] = $row['Correct'];
							$_SESSION['points']=0;
							
							for($j=0;$j<=12;$j++){
								$_SESSION['lvlgood'][$j]=0;
								$_SESSION['lvlbad'][$j]=0;
							}
							
							$_SESSION['counter']=0;
							
						}
						$result->free_result();
			}
			
			$connect->close();
		}
		//header('Location: main_test.php');
	}
?>