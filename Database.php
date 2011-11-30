<?php
include_once('config.php');

class DataBase
{
	private $pdo;
	
	public function __construct()
	{
		$this->pdo = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME.';', DB_USER, DB_PASSWORD);
	}
	
	public function getInterface()
	{
		return $this->pdo;
	}
}
?>