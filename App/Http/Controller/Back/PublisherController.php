<?php
namespace App\Http\Controller\Back;
class PublisherController{
    public function PublisherController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/DiscoverView.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';