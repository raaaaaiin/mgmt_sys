<?php
namespace App\Http\Controller\Back;
class HolidayController{
    public function HolidayController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/author-mng.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';