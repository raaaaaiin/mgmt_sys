<?php
namespace App\Http\Controller\Back;
class BookReturnController{
    public function BookReturnController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/bookreturn.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';