<?php

class SqlConnectionManager
{
	private static $instance;

	private $pdoConnection;

	private function __construct(){
		$pdoConnection = new PDO(FIRST_PDO_PARAM,DB_USER,DB_PASS);
	}

	private function __wakeup(){}

	private function __clone(){}

	public static function get()
	{
		if(!isset(self::$instance))
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function getConnection()
	{
		return $pdoConnection;
	}

}