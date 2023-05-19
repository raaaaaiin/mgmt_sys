<?php
namespace App\Http\Controller\Back;
class CourseController{
    public function CourseController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources\View\Back\course\index.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';