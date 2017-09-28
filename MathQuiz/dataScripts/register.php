<?php

	session_start();
	
	if (isset($_POST['login'])){
		$good=true;
		//Checking login:
		$login = $_POST['login'];
		
		if ((strlen($login)<2) || (strlen($login)>30)){
			$good=false;
			$_SESSION['e_login']="login musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($login)==false){
			$good=false;
			$_SESSION['e_login']="login może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		// Checking mail
		$mail = $_POST['mail'];
		$mailB = filter_var($mail, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($mailB, FILTER_VALIDATE_EMAIL)==false) || ($mailB!=$mail)){
			$good=false;
			$_SESSION['e_mail']="Podaj poprawny adres e-mail!";
		}
		//Chacking password
		$pass = $_POST['pass'];
		$pass2 = $_POST['pass2'];
		
		if ((strlen($pass)<8) || (strlen($pass)>20)){
			$good=false;
			$_SESSION['e_pass']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($pass!=$pass2){
			$good=false;
			$_SESSION['e_pass']="Podane hasła nie są identyczne!";
		}	

		$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
		//Else data
		$age = $_POST['age'];
		$education = $_POST['education'];
		$uniwersity = $_POST['uniwersity'];
				

		//Checking regulations
		/*if (!isset($_POST['regulations'])){
			$good=false;
			$_SESSION['e_regulations']="Potwierdź akceptację regulationsu!";
		}*/	
			
		if($good!=false){
			$_SESSION['fr_login'] = $login;
			$_SESSION['fr_mail'] = $mail;
			$_SESSION['fr_pass'] = $pass;
			$_SESSION['fr_pass2'] = $pass2;
			if (isset($_POST['regulations'])) $_SESSION['fr_regulations'] = true;
			//Connection
			require_once "myData.php";
			mysqli_report(MYSQLI_REPORT_STRICT);
			try {
				$connection = new mysqli($host, $db_user, $db_password, $db_name);
				if ($connection->connect_errno!=0){
					throw new Exception(mysqli_connect_errno());
				}
				else{
					//Checking mail
					$result = $connection->query("SELECT * FROM users WHERE mail='$mail'");
					
					if (!$result) throw new Exception($connection->error);
					
					$count_mails = $result->num_rows;
					if($count_mails>0){
						$good=false;
						$_SESSION['e_mail']="Istnieje już konto przypisane do tego adresu e-mail!";
					}		

					//Checking login
					$result = $connection->query("SELECT * FROM users WHERE login='$login'");
					if (!$result) throw new Exception($connection->error);
					$count_logins = $result->num_rows;
					if($count_logins>0){
						$good=false;
						$_SESSION['e_login']="Istnieje już gracz o takim loginu! Wybierz inny.";
					}
					
					if ($good==true){
						//Add new user
						if ($connection->query("INSERT INTO users VALUES (NULL, '$login', '$pass_hash', '$mail', '$age', '$education', '$uniwersity',NULL)")){     
							$_SESSION['register_good']=true;
							$_SESSION['logIn'] = true;
							$_SESSION['login'] =$login;
							$_SESSION['mail'] = $mail;
							$_SESSION['age'] = $age;
							$_SESSION['education'] = $education;
							$_SESSION['uniwersity'] = $uniwersity;
							
							header('Location: welcome.php');
						}
						else{
							throw new Exception($connection->error);
						}
						
					}
					
					$connection->close();
				}
				
			}
			catch(Exception $e){
				echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
				echo '<br />Informacja developerska: '.$e;
			}
		}
	}
	
	
?>