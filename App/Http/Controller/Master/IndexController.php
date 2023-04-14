<?php
namespace app\Http\Controller\Master;
class IndexController{

    function render(): void
    {
        require_once 'Resources/index.php';
    }

}
