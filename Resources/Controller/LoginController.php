<?php
session_start();
class LoginController{
    function render(): void
    {
        require_once 'Resources/View/LoginView.php';
    }
}


$display = new LoginController;
$display->render();