<?php
namespace App\Http\Controller\Back;
class BookDetailController{
    public function BookDetailController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/bookdetail.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';