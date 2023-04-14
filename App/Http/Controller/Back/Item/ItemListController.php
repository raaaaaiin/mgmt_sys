<?php

namespace App\Resources\Controller\Back\Item;
session_start();
class ItemListController{
    function render(): void
    {
        require_once '../Resources/Views/Back/Item/ItemListView.php';
    }

}

$_SESSION['CurrentSelection'] = 'ItemListController';
$display = new ItemListController;
$display->render();
