<?php
namespace App\Http\Controller\Back;
class CheckOutController{
    public function CheckOutController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/checkout.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';