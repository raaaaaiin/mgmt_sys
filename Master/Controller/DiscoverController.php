<?php
class DiscoverController{
    function render(): void
    {
        require_once 'Master/View/DiscoverView.php';
    }
}


$display = new DiscoverController;
$display->render();