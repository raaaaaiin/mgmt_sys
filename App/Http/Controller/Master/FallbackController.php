<?php
namespace app\Http\Controller\Master;
class FallbackController{

    public function FallbackController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'View/index.php';
    }

}
