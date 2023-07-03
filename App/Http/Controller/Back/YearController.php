<?php
namespace App\Http\Controller\Back;

use App\Models\Year;
use App\Common\Model;

class YearController{
    public function YearController(): void{
        $this->render();
    }
    function render(): void
    {
        $yearList = (new Model())->table('year')->get();
        var_dump($yearList);
        require_once 'Resources\View\Back\year\index.php';
    }

}

$_SESSION['CurrentSelection'] = 'TimelineController';