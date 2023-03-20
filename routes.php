<?php
include_once "autoload.php";
use app\Common\Route;
use app\Http\Controller\Auth\LoginController;
use Controller\Back\DiscoverController;
use Controller\Back\Item\ItemAddController;
use Controller\Back\Item\ItemListController;
use Controller\Back\NewsfeedController;
use Controller\Back\ProfileController;
use Controller\Back\TemplateTrialController;
use Controller\Back\TimelineController;
use app\Http\Controller\Navigations\MasterController;
use Controller\Navigations\SideNavController;
use app\Http\Controller\Navigations\TopNavController;

$request = $_SERVER['REQUEST_URI'];
$removeRoot = str_replace('/mgmt_sys/', '', $request, );
$curdir = dirname($_SERVER['REQUEST_URI']);
$baseUri = str_replace($curdir, '', $request);
$absolute = basename(parse_url($removeRoot, PHP_URL_PATH));
?>
<?php
switch ($absolute) {
    case 'index':
        require __DIR__ . '/Resources/index.php';
        break;
    case 'login':
        Route::get('/path', [LoginController::class,'render']);
        
        break;
    case 'TopNavController':
        (new TopNavController())->render();
        break;
    case 'SideNavController':
        (new SideNavController())->index();
        break;
    case 'MasterController':
        (new MasterController())->render();
        break;
    case 'DiscoverController':
        (new DiscoverController())->index();
        break;
    case 'ProfileController':
        (new ProfileController())->index();
        break;
    case 'TimelineController':
        (new TimelineController())->index();
        break;
    case 'NewsfeedController':
        (new NewsfeedController())->index();
        break;
    case 'ItemAddController':
        (new ItemAddController())->index();
        break;
    case 'ItemListController':
        (new ItemListController())->index();
        break;
    case 'TemplateTrialController':
        (new TemplateTrialController())->index();
        break;
    default:
        require __DIR__ . '/View/index.php';
        break;
} 