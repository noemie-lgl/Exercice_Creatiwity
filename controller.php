<?php

require_once('Model/UserModel.php');

class Controller 

{

	public function __construct(){}
	
	
	/* 
	$type_request="info_log_in" : $info=array("username","password")
	$type_request="info_registration" : $info=array("nickname","email","password","confirm_password")
	*/
	public function handleRequest($type_request,$info){
		
		if ($type_request=="info_log_in"){
			
			$user=New UserModel($info[0],$info[1]);
		
			$result=$user->validateInfoConnection(); 
	
			if ($result){
				
				header('Location:logged_in.php');
				exit();
			}
			else {
				
				echo "<p> <font color=red> The username or password is incorrect </font> </p> "; 
			}
		}
		
		if ($type_request=="info_registration"){
			
			$user= New UserModel($info[0],$info[2]);
		
			if ($user->createNewLine($info[1],$info[3])){
				
				header('Location:logged_in.php');
				exit();
			}
			else{
				
				echo "<p> <font color=red> The passwords don't match </font> </p> ";
			}
		}
	}
}
	
?>