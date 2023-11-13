<?php

require_once "./src/utils/mysql/src/mop.php";

trait MySQLQuery
{
	private $host;
	private $username;
	private $password;
	private $database;
	private $connectType;

	/**
	 * @var \Mysql\mop
	 */
	private $connection;

	protected function init($host, $username, $password, $database, $type = "Mysqli")
	{
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->connectType = $type;
	}

	/**
	 * connect to the database
	 */
	protected function connect()
	{
		$this->connection = new Mysql\mop($this->host, $this->username, $this->password, $this->database, $this->connectType);

		if ($this->connection->error) return false;

		return true;
	}

	protected function update()
	{
		//your code here
	}

	protected function disconnect()
	{
		$this->connection->close();
	}
}
