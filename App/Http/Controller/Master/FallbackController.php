<?php
namespace app\Http\Controller\Master;
class FallbackController{

    function render(): void
    {
        require_once 'View/index.php';
    }

}
