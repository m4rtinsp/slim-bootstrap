<?php

class Model
{
	public $conn;

	public function __construct($config)
	{
		$this->conn = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['password']);
	}

	public function connect()
	{
		return $this->conn;
	}
}