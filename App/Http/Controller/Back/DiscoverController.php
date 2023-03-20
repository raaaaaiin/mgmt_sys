<?php
class DiscoverController{
    function render(): void
    {
        require_once 'Resources/View/Back/DiscoverView.php';
    }
}

$_SESSION['CurrentSelection'] = 'DiscoverController';
$display = new DiscoverController;
$display->render();