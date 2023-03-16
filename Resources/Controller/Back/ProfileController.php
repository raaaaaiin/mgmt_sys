<?php

namespace App\Resources\Controller;

use App\Models\studentparent;

include 'App\Models\studentparent.php';


class ProfileController{
    public $profilepicdata;

    function render(): void
    {
        $studentlist = new studentparent;
        $ha = $studentlist->get();
        $this->setProfilepicdata("Raw Data");
        foreach($ha as $hotdog){
            echo $hotdog['Student_Code'] . '<br>';
        }
        require_once 'Resources/View/Back/ProfileView.php';
    }
    function setProfilepicdata($string){
        $this->profilepicdata = $string;
    }

    function getProfilepicdata(){
        return $this->profilepicdata;
    }


}

$_SESSION['CurrentSelection'] = 'ProfileController';
$display = new ProfileController;
$display->render();
