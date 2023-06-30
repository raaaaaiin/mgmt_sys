<?php
namespace App\Http\Controller\Back;

use App\Models\Course_Year;

class CourseYearController{
    public function CourseYearController(): void{
        $this->render();
    }
    function render(): void
    {
        $CourseYearList = (new Course_Year)->get();
        
        require_once 'Resources\View\Back\course_year\index.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';