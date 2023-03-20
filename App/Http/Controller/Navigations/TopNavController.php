<?php
namespace app\Http\Controller\Navigations;
class TopNavController
{
    function render(): void
    {
        require_once 'Resources/View/Navigations/TopNavView.php';
    }

}


$display = new TopNavController;
$display->render();
