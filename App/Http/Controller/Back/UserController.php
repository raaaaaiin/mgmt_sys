<?php
namespace App\Http\Controller\Back;
class UserController{
    public function UserController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/user-mng.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';