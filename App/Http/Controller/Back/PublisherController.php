<?php
namespace App\Http\Controller\Back;


use App\Models\Publisher;

class PublisherController{
    public function PublisherController(): void{
        $this->render();
    }
    function render(): void
    {
        $Publisherlist =(new Publisher)->get();
        require_once 'Resources\View\Back\publisher-mng.php';
    }
}
$_SESSION['CurrentSelection'] = 'DiscoverController';