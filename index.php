<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8" />
		<title>Exercice technique</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	
		<div class="center">
		
			<form method="post" action="index.php">
		
				<h1> Log in </h1>
		
				Username: <input type="text" value="Nickname or email" onfocus="this.value=''" name="username">
				<p> Password: <input type="password" name="pswd"> </p>
				
				
				<p>	<input type="submit" value="Log in" name="info_log_in"> </p>
		
				<?php
	
					require_once('controller.php');
	
					if (isset($_POST['info_log_in'])){
		
						$controller= new Controller();
		
						$info=array($_POST['username'],$_POST['pswd']);
			
						$controller->handleRequest('info_log_in',$info); //redirects to an other page if successfull, echo an error message else
					}
				?>
		
		
			</form>	
		
			<p> <a href="http://localhost/exercice_laguelle/registration.php"> Not registered yet? </a> </p> 
		
		</div>
		
	</body>
	
</html>	