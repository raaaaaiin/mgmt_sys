<?php
namespace App\Http\Controller\Back;
class BookController{
    public function BookController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources\View\Back\book.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';