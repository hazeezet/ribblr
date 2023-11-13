<?php

require_once "query.php";
require_once "payloads.php";


class DB
{
	use MySQLQuery, Payloads;

	public function __construct()
	{
		$host = getenv("DB_HOST");
		$username = getenv("DB_USERNAME");
		$password = getenv("DB_PASSWORD");
		$database = getenv("DB_NAME");

		$this->init($host, $username, $password, $database, "pdo");

		if (!$this->connect()) throw new Exception("Something went wrong, not you it was us.");
	}

	public function update()
	{
		//your code here
	}
}
