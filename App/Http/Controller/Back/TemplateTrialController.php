<?php

namespace App\Resources\Controller\Back;

include 'App\Common\Common.php';

session_start();
class TemplateTrialController extends Common {
    public $kawaii = "Kyot is working fine";
    function render(): void
    {
        $this->assign('kawaii','"Hello there, Kawaii template engine is working"');
        $this->EngineView('Resources/View/Back/TemplateTrialView');
    }

}

$_SESSION['CurrentSelection'] = 'TemplateTrialController';
$display = new TemplateTrialController;
$display->render();
