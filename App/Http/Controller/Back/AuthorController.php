<?php
namespace App\Http\Controller\Back;

use App\Models\Author;
 
class AuthorController{
    public function AuthorController(): void{
        $this->render();
    }
    function render(): void
    {
        $Authors = new Author;
        $ha = $Authors->get();
        
        
        require_once 'Resources/View/Back/author-mng.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';