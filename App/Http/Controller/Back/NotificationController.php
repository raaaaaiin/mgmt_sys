<?php
namespace App\Http\Controller\Back;
class NotificationController{
    public function NotificationController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Back/notification.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';