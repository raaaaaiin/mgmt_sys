<?php
session_start();
class TimelineController{
    function render(): void
    {
        require_once 'Resources/View/TimelineView.php';
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';
$display = new TimelineController;
$display->render();
