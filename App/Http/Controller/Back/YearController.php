<?php
namespace App\Http\Controller\Back;

use App\Models\Year;

class YearController{
    public function YearController(): void{
        $this->render();
    }
    function render(): void
    {
        $yearList = (new Year())->table('year')->get();
        var_dump($yearList);
        require_once 'Resources\View\Back\year\index.php';
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';