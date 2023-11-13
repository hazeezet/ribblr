<?php
header("Content-Type: application/json");
$response = array('statusCode' => 404, 'error' => "api route could not be found");
$response = json_encode($response);
echo $response;
exit;
