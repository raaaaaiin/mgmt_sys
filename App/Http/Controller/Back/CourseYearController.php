<?php
namespace App\Http\Controller\Back;
class CourseYearController{
    public function CourseYearController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/DiscoverView.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';