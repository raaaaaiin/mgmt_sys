<?php
namespace app\Http\Controller\Navigations;
class SideNavController{

    function render(): void
    {
        require_once '../Resources/Views/Navigations/SideNavView.php';
    }

}

$display = new SideNavController;
$display->render();
