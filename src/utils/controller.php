<?php

// DEFINE YOUR PAGES HERE

if (!defined("FROM_INDEX")) {
    http_response_code(400);
    die("Access denined");
}

$path = trim($_SERVER["REQUEST_URI"], "/");

$param = explode("/", $path);



//APIs
if ($param[0] == "api") {

    if ($param[1] == "store") : require_once "./src/pages/api/store/index.php";

    else : require_once "./src/pages/api/404.php";

    endif;
}

//home
if ($param[0] == null) : require_once "./src/pages/index.php";


else : require_once "./src/pages/api/404.php";

endif;
