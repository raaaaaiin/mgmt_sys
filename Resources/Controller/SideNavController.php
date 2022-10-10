<?php
session_start();
class SideNavController{

    function render(): void
    {
        require_once 'Resources/View/SideNavView.php';
    }

}

$display = new SideNavController;
$display->render();
