<?php
namespace App\Http\Controller\Back;

use App\Models\Tag;

class TagController{
    public function TagController(): void{
        $this->render();
    }
    function render(): void
    {
        $Taglist = (new Tag)->get();
        require_once 'Resources\View\Back\tag-mng.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';