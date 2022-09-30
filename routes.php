<?php

$request = $_SERVER['REQUEST_URI'];
$removeRoot = str_replace('/Ms/','',$request,);
$curdir = dirname($_SERVER['REQUEST_URI']);
$baseUri = str_replace($curdir, '', $request);
switch ($removeRoot) {
    case '' :
        require __DIR__ . '/View/helloworld.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/View/404.php';
        break;
}

?>