<?php
class TimelineController{
    function render(): void
    {
        require_once 'Resources/View/Back/TimelineView.php';
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';
$display = new TimelineController;
$display->render();
