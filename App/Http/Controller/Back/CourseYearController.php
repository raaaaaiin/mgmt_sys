<?php
namespace App\Http\Controller\Back;
class CourseYearController{
    public function CourseYearController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources\View\Back\course_year\index.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';