<?php
session_start();
class MasterController{
    function render(): void
    {
        require_once 'Master/View/MasterView.php';
    }

}

$_SESSION["refresh"] = "Try";
    $display = new MasterController;
$display->render();