<?php
namespace App\Resources\Controller\Back;
class TimelineController{
    function render(): void
    {
        require_once '../Resources/Views/Back/TimelineView.php';
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';
$display = new TimelineController;
$display->render();
