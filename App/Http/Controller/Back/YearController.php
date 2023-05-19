<?php
namespace App\Http\Controller\Back;
class YearController{
    public function YearController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources\View\Back\year\index.php';
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';