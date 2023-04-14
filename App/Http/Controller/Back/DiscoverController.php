<?php
namespace App\Resources\Controller\Back;
class DiscoverController{
    function render(): void
    {
        require_once '../Resources/Views/Back/DiscoverView.php';
    }
}

$_SESSION['CurrentSelection'] = 'DiscoverController';
$display = new DiscoverController;
$display->render();