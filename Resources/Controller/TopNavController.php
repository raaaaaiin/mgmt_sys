<?php
session_start();
class TopNavController
{
    function render(): void
    {
        require_once 'Resources/View/TopNavView.php';
    }

}


$display = new TopNavController;
$display->render();
