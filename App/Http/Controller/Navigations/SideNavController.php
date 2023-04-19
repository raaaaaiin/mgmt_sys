<?php
namespace app\Http\Controller\Navigations;
class SideNavController{
    public function SideNavController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Navigations/SideNavView.php';
    }

}

