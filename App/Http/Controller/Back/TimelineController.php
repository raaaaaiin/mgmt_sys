<?php
namespace App\Http\Controller\Back;
class TimelineController{
    public function TimelineController(): void{
        $this->render();
    }
    function render()
    {
        //require_once 'Resources/View/Back/TimelineView.php';
        return "<h1>hi</h1>";
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';