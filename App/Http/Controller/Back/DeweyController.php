<?php
namespace App\Http\Controller\Back;
class DeweyController{
    public function DeweyController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/dewey-decimal.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';