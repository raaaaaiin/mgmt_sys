<?php
namespace app\Http\Controller\Master;
class IndexController{
    public function IndexController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/index.php';
    }

}
