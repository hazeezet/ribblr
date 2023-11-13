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
		if (!isset($_POST["name"])) throw new Exception("Payloads is missing");

		$name = $_POST["name"];
		$storeId = "AJDS23"; //get it anywhere, just a placeholder

		if (!$this->validateName($name)) throw new Exception("Invalid payloads.");

		return $this->updateName($name,$storeId);

		$this->disconnect();
	}
}
