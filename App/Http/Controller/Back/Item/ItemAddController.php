<?php
session_start();
class ItemAddController{
    function render(): void
    {
        require_once 'Resources/View/Back/Item/ItemAddView.php';
    }

}

$_SESSION['CurrentSelection'] = 'ItemAddController';
$display = new ItemAddController;
$display->render();
