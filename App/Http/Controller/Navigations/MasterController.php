<?php
namespace app\Http\Controller\Navigations;

class MasterController{
    public function NewsfeedController(): void{
        
        $this->render();
    }
    public $history;
    function render(): void
    {
        $this->checkSelect();
        require_once 'Resources/View/Navigations/MasterView.php';
    }
    function checkSelect(){
        if(isset($_SESSION['CurrentSelection'])){
            $this->history = $_SESSION['CurrentSelection'];
        }else{
            $this->history = "DiscoverController";
        }
    }
}

