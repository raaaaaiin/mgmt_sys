<?php
session_start();
class NewsfeedController{
    function render(): void
    {
        require_once 'Resources/View/Back/NewsfeedView.php';
    }

}

$_SESSION['CurrentSelection'] = 'NewsfeedController';
$display = new NewsfeedController;
$display->render();
