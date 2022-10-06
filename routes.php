<?php

$request = $_SERVER['REQUEST_URI'];
$removeRoot = str_replace('/Sys_mgmt/','',$request,);
$curdir = dirname($_SERVER['REQUEST_URI']);
$baseUri = str_replace($curdir, '', $request);


switch ($removeRoot) {
    case 'index' :
        require __DIR__ . '/Master/index.php';
        break;
    case 'login' :
        require __DIR__ . '/Master/Controller/loginController.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/View/404.php';
        break;





}

