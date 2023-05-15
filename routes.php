<?php
include_once "autoload.php";
use app\Common\Route;
use app\Http\Controller\Auth\LoginController;
use app\Http\Controller\Back\DiscoverController;
use app\Http\Controller\Back\Item\ItemAddController;
use app\Http\Controller\Back\Item\ItemListController;
use app\Http\Controller\Back\NewsfeedController;
use app\Http\Controller\Back\ProfileController;
use app\Http\Controller\Back\TemplateTrialController;
use app\Http\Controller\Back\TimelineController;
use app\Http\Controller\Master\FallbackController;
use app\Http\Controller\Master\IndexController;
use app\Http\Controller\Navigations\MasterController;
use app\Http\Controller\Navigations\SideNavController;
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
Route::get('notfound', [FallbackController::class,'render']);
