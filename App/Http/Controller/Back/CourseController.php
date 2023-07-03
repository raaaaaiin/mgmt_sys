<?php
namespace App\Http\Controller\Back;

use App\Models\Course;

class CourseController{
    public function CourseController(): void{
        $this->render();
    }
    function render(): void
    {
        $CourseYearList = (new Course)->get();
        var_dump($CourseYearList);
        require_once 'Resources\View\Back\course\index.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';