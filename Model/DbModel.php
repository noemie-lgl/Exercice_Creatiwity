<?php

class Database {
	private $host;
	private $user;
	private $password;
	private $database;
	public $mysqli;
	
	public function __construct(){
		$this->connectToDb();
	}
	
	private function connectToDb(){
		$this->host='localhost';
		$this->user='root';
		$this->password='';
		$this->database='Registration';

		$this->mysqli=new mysqli($this->host,$this->user,$this->password, $this->database);
		
		if (mysqli_connect_error()){
			die('DB ERROR: (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}
		
		return $this->mysqli;
	}
	
	public function handleRequest($request){
		return $this->mysqli->query($request);
	}
	
	public function disconnectFromDb(){
		$this->mysqli->close();
	}
}
?>
	
