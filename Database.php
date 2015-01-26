<?php
namespace stORM;

include_once('config.php');

class DataBase
{
	protected static $pdo;

	public function __construct()
	{
		
	}
	
	public function getInterface()
	{
		if (is_null(static::$pdo))
		{
			static::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';', DB_USER, DB_PASSWORD);
			$now = new DateTime();
			$now->setTimeZone(new DateTimeZone(TIME_ZONE));
			static::$pdo->exec("SET time_zone='".$now->format('P')."'");	
		}

		return static::$pdo;
	}

	public function killInterface()
	{
		// $this->pdo = null;
	}
}
?>