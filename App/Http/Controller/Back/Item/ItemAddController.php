<?php
namespace App\Resources\Controller\Back\Item;
session_start();
class ItemAddController{
    public function ItemAddController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/Item/ItemAddView.php';
    }

}

$_SESSION['CurrentSelection'] = 'ItemAddController';
