<?php
include_once "autoload.php";
use app\Common\Route;
use app\Http\Controller\Auth\LoginController;
use app\Http\Controller\Master\IndexController;
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

Route::get('login', [LoginController::class,'render']);
Route::get('TopNavController', [TopNavController::class,'render']);
Route::get('SideNavController', [SideNavController::class,'render']);
Route::get('MasterController', [MasterController::class,'render']);
Route::get('DiscoverController', [DiscoverController::class,'render']);
Route::get('ProfileController', [ProfileController::class,'render']);
Route::get('TimelineController', [TimelineController::class,'render']);
Route::get('NewsfeedController', [NewsfeedController::class,'render']);
Route::get('ItemAddController', [ItemAddController::class,'render']);
Route::get('TemplateTrialController', [TemplateTrialController::class,'render']);
Route::get('index', [IndexController::class,'render']);

?>
<?php
/*switch ($absolute) {
    case 'index':
        require __DIR__ . '/Resources/index.php';
        break;
    case 'login':
        
        
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
} */