<?php
namespace App\Http\Controller\Back;
class TagController{
    public function TagController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources\View\Back\tag-mng.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';