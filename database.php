<?php

class dbConnection{
	public $hostAddress="localhost";
	public $userName="root";
	public $password="";
	public $dbName="holycrescent";
	public $link;
	public $sms;

	function __construct()
	{
		$this->connection();
	}
	private function connection()
	{
			$this->link = new mysqli($this->hostAddress,$this->userName,$this->password,$this->dbName);
			if(!$this->link){ 
				$this->sms="Connection failed !";
			}else{
				$this->sms="Connection eastablish";
			}
	}
	function __destruct()
	{
		$this->link->close();
	}
}

?>