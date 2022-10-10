<?php
session_start();
class DiscoverController{
    function render(): void
    {
        require_once 'Resources/View/DiscoverView.php';
    }
}

$_SESSION['CurrentSelection'] = 'DiscoverController';
$display = new DiscoverController;
$display->render();