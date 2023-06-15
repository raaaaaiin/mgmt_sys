<?php

namespace App\Http\Controller\Back;

use App\Models\studentparent;


class ProfileController{
    public $profilepicdata;
    public function ProfileController(): void{
        $this->render();
    }
    function render(): void
    {
        $studentlist = new studentparent;
        $ha = $studentlist->get();
        $this->setProfilepicdata("Raw Data");
        foreach($ha as $hotdog){
            echo $hotdog['Student_Code'] . '<br>';
        }
        require_once 'Resources\View\Back\ProfileView.php';
    }
    function setProfilepicdata($string){
        $this->profilepicdata = $string;
    }

    function getProfilepicdata(){
        return $this->profilepicdata;
    }


}

$_SESSION['CurrentSelection'] = 'ProfileController';
