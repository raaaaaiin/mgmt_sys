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

use app\Http\Controller\Back\TagController;
use app\Http\Controller\Back\AuthorController;
use app\Http\Controller\Back\PublisherController;
use app\Http\Controller\Back\CourseYearController;
use app\Http\Controller\Back\CourseController;
use app\Http\Controller\Back\YearController;
use app\Http\Controller\Back\BookController;

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










Route::get("tag-mng", [TagController::class,'render']);
Route::get("author-mng", [AuthorController::class,'render']);
Route::get("publisher-mng", [PublisherController::class,'render']);
Route::get("course-year", [CourseYearController::class,'render']);
Route::get("course", [CourseController::class,'render']);
Route::get("year", [YearController::class,'render']);
Route::get("books", [BookController::class,'render']);
Route::dispatch();

// Check if there was a match
Route::fallback('404', [FallbackController::class,'render']);






