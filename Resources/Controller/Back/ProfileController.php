<?php

namespace App\Resources\Controller;

session_start();

use App\Models\studentparent;

include 'App\Models\studentparent.php';


class ProfileController{
    public $profilepicdata;

    function render(): void
    {
        $studentlist = new studentparent;
        $ha = $studentlist->get();
        foreach($ha as $hotdog){
            echo $hotdog['Student_Code'] . '<br>';
        }
        require_once 'Resources/View/Back/ProfileView.php';
    }
    function setProfilepicdata(){
        $this->profilepicdata = "raw data";
    }

    function getProfilepicdata(){
        return $this->profilepicdata;
    }


}

$_SESSION['CurrentSelection'] = 'ProfileController';
$display = new ProfileController;
$display->render();
