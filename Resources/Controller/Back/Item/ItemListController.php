<?php
session_start();
class ItemListController{
    function render(): void
    {
        require_once 'Resources/View/Back/Item/ItemListView.php';
    }

}

$_SESSION['CurrentSelection'] = 'ItemListController';
$display = new ItemListController;
$display->render();
