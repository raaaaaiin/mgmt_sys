<?php
class ProfileController{
    function render(): void
    {
        require_once 'Master/View/ProfileView.php';
    }

}


$display = new ProfileController;
$display->render();
