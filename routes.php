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
use App\Http\Controller\Back\AwardsController;
use App\Http\Controller\Back\BackUpController;
use app\Http\Controller\Back\PublisherController;
use app\Http\Controller\Back\CourseYearController;
use app\Http\Controller\Back\CourseController;
use app\Http\Controller\Back\YearController;
use app\Http\Controller\Back\BookController;
use App\Http\Controller\Back\BookDetailController;
use App\Http\Controller\Back\BookReturnController;
use App\Http\Controller\Back\BookTabController;
use App\Http\Controller\Back\CheckOutController;
use App\Http\Controller\Back\DeweyController;
use App\Http\Controller\Back\RoleController;
use App\Http\Controller\Back\IssuedBooksController;
use App\Http\Controller\Back\HolidayController;
use App\Http\Controller\Back\NotificationController;
use App\Http\Controller\Back\UserController;
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
//Route::get('ItemAddController', [ItemAddController::class,'render']);
//Route::get('TemplateTrialController', [TemplateTrialController::class,'render']);
Route::get('index', [IndexController::class,'render']);
Route::get("tag-mng", [TagController::class,'render']);
Route::get("author-mng", [AuthorController::class,'render']);
Route::get("publisher-mng", [PublisherController::class,'render']);
Route::get("course-year", [CourseYearController::class,'render']);
Route::get("course", [CourseController::class,'render']);
Route::get("year", [YearController::class,'render']);
Route::get("books", [BookController::class,'render']);
Route::get("awards", [AwardsController::class,'render']);
Route::get("back-up", [BackUpController::class,'render']);
Route::get("issued", [IssuedBooksController::class,'render']);
Route::get("bookdetail", [BookDetailController::class,'render']);
Route::get("bookreturn", [BookReturnController::class,'render']);
Route::get("booktab", [BookTabController::class,'render']);
Route::get("checkout", [CheckOutController::class,'render']);
Route::get("dewey-decimal", [DeweyController::class,'render']);
Route::get("holiday", [HolidayController::class,'render']);
Route::get("notif", [NotificationController::class,'render']);
Route::get("role-perm", [RoleController::class,'render']);
Route::get("user-mng", [UserController::class,'render']);
Route::dispatch();

// Check if there was a match
Route::fallback('404', [FallbackController::class,'render']);






