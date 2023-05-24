<?php
namespace App\Http\Controller\Back;
class RoleController{
    public function RoleController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/role-perm-mng.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';