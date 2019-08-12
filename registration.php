<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="style.css">		
	</head>
	
	<body> 
	
		<div class="center">
		
			<h1> Registration </h1>
	
			<form method="post" action="registration.php">
	
				Nickname: <input type="text" name="nickname" required pattern="[a-zA-Z0-9]+">
				<p> Email: <input type="email" name="email"> </p>
				<p> Password: <input type="password" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 8 characters and at least, one lowercase letter, one uppercase letter and one figure"> </p>
				<p> Confirm Password: <input type="password" name="confirm_pswd"> </p>
		
				<input type="submit" value="Register"  name="info_registration">
			
			</form>
	
			<?php
	
				require_once('controller.php');
	
				if (isset($_POST['info_registration'])){
		
					$controller= new Controller();
		
					$info=array($_POST['nickname'],$_POST['email'],$_POST['pswd'],$_POST['confirm_pswd']);
		
					$controller->handleRequest('info_registration',$info); //redirects to another page if successfull, echo an error message else
				}
			?>
			
			
		</div>
		
		
	</body>	
	
</html>