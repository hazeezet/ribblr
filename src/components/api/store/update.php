<?php

require_once "./src/components/api/store/lib/db.php";

$db = new DB();

try {
	if (!$db->update()) throw new Exception("Unable to update your store name"); {

		header("Content-Type: application/json");
		$response = array("statusCode" => 200, "error" => "", "data" => []);
		$response = json_encode($response);
		echo $response;
		exit;
	}
} catch (\Throwable $error_msg) {
	header("Content-Type: application/json");
	$response = array("statusCode" => 400, "error" => $error_msg->getMessage(), "data" => array());
	$response = json_encode($response);
	echo $response;
	exit;
}
