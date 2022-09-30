<?php

$request = $_SERVER['REQUEST_URI'];
echo $request;
echo phpversion();
switch ($request) {
    case '/' :
        require __DIR__ . '/View/hello-world.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/View/404.php';
        break;
}

?>