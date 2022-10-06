<?php
class SideNavController{
    function render(): void
    {
        require_once 'Master/View/SideNavView.php';
    }

}


$display = new SideNavController;
$display->render();
