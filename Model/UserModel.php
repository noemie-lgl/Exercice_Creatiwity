
<?php

require_once('DbModel.php');

class UserModel
{ 
	
	private $username;
	
	private $password;
	
	
	public function __construct($username,$password){
		$this->username=$username;
		$this->password=$password;
	}

		
	public function createNewLine($email,$confirm_pswd){ //we chose the nickname as username in our script
		
		if ($this->password != $confirm_pswd){
			
			return False; 
			
		}
		else {
			
			$db_connection= new Database(); 
		
			$request = "INSERT INTO user (nickname,email,password) VALUES ('".$this->username."','".$email."','".$this->password."')";
		
			$result=$db_connection->handleRequest($request);

			$db_connection->disconnectFromDb();
		
			return $result;
		}
		
	}
	
	public function validateInfoConnection(){
		
		$db_connection= new Database();

		// has to be case sensitive for the password 
		$result=$db_connection->handleRequest("SELECT * FROM user WHERE (nickname='".$this->username."' OR email='".$this->username."') AND password='".$this->password."'");
		
		$count=$result->num_rows;
		
		$db_connection->disconnectFromDb();
		
		return !($count==0); //True if the info are in the database 
	}

}

?>