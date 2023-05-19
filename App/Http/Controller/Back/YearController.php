<?php
namespace App\Http\Controller\Back;
class TimelineController{
    public function TimelineController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/TimelineView.php';
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';