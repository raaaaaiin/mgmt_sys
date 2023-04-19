<?php
session_start();
class ItemListController{

    public function ItemListController(): void{
        $this->render();
    }    function render(): void
    {
        require_once 'Resources/View/Back/Item/ItemListView.php';
    }

}

$_SESSION['CurrentSelection'] = 'ItemListController';