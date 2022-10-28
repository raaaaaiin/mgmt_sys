<?php
session_start();
class LoginController{
    function render(): void
    {
        require_once 'Resources/View/Auth/LoginView.php';
    }

}


$display = new LoginController;
$display->render();