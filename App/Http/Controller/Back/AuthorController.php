<?php
namespace App\Http\Controller\Back;
class AuthorController{
    public function AuthorController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/DiscoverView.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';