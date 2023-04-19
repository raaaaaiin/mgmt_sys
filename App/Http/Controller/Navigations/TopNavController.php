<?php
namespace app\Http\Controller\Navigations;
class TopNavController
{
    public function TopNavController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Navigations/TopNavView.php';
    }

}

