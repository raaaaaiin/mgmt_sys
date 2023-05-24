<?php
namespace App\Http\Controller\Back;
class AwardsController{
    public function AwardsController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/awards.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';