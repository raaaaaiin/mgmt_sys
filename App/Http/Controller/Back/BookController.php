<?php
namespace App\Http\Controller\Back;
class BookController{
    public function BookController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/DiscoverView.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';