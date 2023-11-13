<?php

// STORE API ENDPOINT
// can contain any methods eg GET, POST

try {
	if ($_SERVER["REQUEST_METHOD"] === "POST") : require_once "./src/components/api/store/update.php";

	// geting store info is not available yet
	elseif ($_SERVER["REQUEST_METHOD"] === "GET") : require_once "./src/pages/api/404.php";

	else : require_once "./src/pages/api/404.php";

	endif;
} catch (\Throwable $error_msg) {
	header("Content-Type: application/json");
	$response = array("statusCode" => 400, "error" => $error_msg->getMessage());
	$response = json_encode($response);
	echo $response;
}
