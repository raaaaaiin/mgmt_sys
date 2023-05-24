<?php
namespace App\Http\Controller\Back;
class BackUpController{
    public function BackUpController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/backup.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';