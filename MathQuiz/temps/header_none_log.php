<header>
	
		<h1 class="logo">Test Matematyczny </br><b id="b1">Matmozaura</b></h1>
		
		<nav class="topnav">
		
			<ul class="menu">
				<li><a href="#">Testy</a></li>
				<li><a href="#">Statystyki</a></li>
				<li><a href="#">Przydatne materiały</a></li>
				<li><a href="#">O autorze</a></li>
				<li><a href="#">Forum</a></li>
				<li id="logmenu"><a href="#" onclick="log()">Zaloguj</a></li>
			</ul>
				<div class="login">
					<button id="close" onclick="log()">x</button>
						<form action="dataScripts/log_in.php" method="post">
							<input type="text" name="login" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" >
			
							<input type="password" name="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" >
			
							<input type="submit" value="Zaloguj się">
							Nie masz konta?
						</form>
						<button id="regist"  onclick="window.location='sing_in.php' ">Zarejestruj</button>
				<div>
		</nav>
	
</header>