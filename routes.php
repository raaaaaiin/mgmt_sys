<?php

$request = $_SERVER['REQUEST_URI'];
$removeRoot = str_replace('/mgmt_sys/','',$request,);
$curdir = dirname($_SERVER['REQUEST_URI']);
$baseUri = str_replace($curdir, '', $request);
switch ($removeRoot) {
    case 'index' :
        require __DIR__ . '/Resources/index.php';
        break;
    case 'login' :
        require __DIR__ . '/Resources/Controller/loginController.php';
        break;
    case 'TopNavController' :
        require __DIR__ . '/Resources/Controller/TopNavController.php';
        break;
    case 'SideNavController' :
        require __DIR__ . '/Resources/Controller/SideNavController.php';
        break;
    case 'MasterController':
        require __DIR__ . '/Resources/Controller/MasterController.php';
        break;
    case 'DiscoverController':
        require __DIR__ . '/Resources/Controller/DiscoverController.php';
        break;
    case 'ProfileController':
        require __DIR__ . '/Resources/Controller/ProfileController.php';
        break;
    case 'TimelineController':
        require __DIR__ . '/Resources/Controller/TimelineController.php';
        break;
    case 'NewsfeedController':
        require __DIR__ . '/Resources/Controller/NewsfeedController.php';
        break;
    default:
        require __DIR__ . '/View/404.php';
        break;





}

