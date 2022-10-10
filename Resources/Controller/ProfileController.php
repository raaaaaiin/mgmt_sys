<?php
session_start();
class ProfileController{
    function render(): void
    {
        require_once 'Resources/View/ProfileView.php';
    }

}

$_SESSION['CurrentSelection'] = 'ProfileController';
$display = new ProfileController;
$display->render();
