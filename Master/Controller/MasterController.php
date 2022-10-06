<?php
class MasterController{
    function render(): void
    {
        require_once 'Master/View/MasterView.php';
    }

}


    $display = new MasterController;
$display->render();