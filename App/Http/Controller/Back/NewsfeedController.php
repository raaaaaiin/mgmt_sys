<?php
namespace App\Http\Controller\Back;
class NewsfeedController{
    public function NewsfeedController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/NewsfeedView.php';
    }

}
$_SESSION['CurrentSelection'] = 'NewsfeedController';