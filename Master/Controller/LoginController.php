<?php
class LoginController{
    function render(): void
    {
        require_once 'Master/View/LoginView.php';
    }
}


$display = new LoginController;
$display->render();