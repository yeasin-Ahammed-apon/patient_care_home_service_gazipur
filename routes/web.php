<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PopulerServiceController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
function areActiveRoutes(array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }
    }

// all user interface
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/contact-us', [HomeController::class,'contact_us'])->name('contact_us');
Route::get('/our-services', [HomeController::class,'our_services'])->name('our_services');
Route::get('/{url}', [HomeController::class,'service'])->name('url');
Route::post('/contact-us', [HomeController::class,'message'])->name('message');
Route::get('/about-us', [HomeController::class,'about_us'])->name('about_us');
Route::get('/admin/login', [HomeController::class,'login'])->name('login');
Route::post('/admin/check', [HomeController::class,'check'])->name('check');
Route::middleware(['admin','revalidate'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/admin/profile', [AdminController::class,'profile'])->name('profile');
    // services route
    Route::get('/admin/service/list', [ServiceController::class,'service_list'])->name('service_list');
    Route::get('/admin/service/view/{id}', [ServiceController::class,'service_view'])->name('service_view');
    Route::get('/admin/service/add', [ServiceController::class,'service_add'])->name('service_add');
    Route::post('/admin/service/create', [ServiceController::class,'service_create'])->name('service_create');
    Route::get('/admin/service/edit/{id}', [ServiceController::class,'service_edit'])->name('service_edit');
    Route::post('/admin/service/update', [ServiceController::class,'service_update'])->name('service_update');
    Route::get('/admin/service/delete/{id}', [ServiceController::class,'service_delete'])->name('service_delete');
    // Message route
    Route::get('/admin/message/list', [MessageController::class,'message_list'])->name('message_list');
    Route::get('/admin/message/view/{id}', [MessageController::class,'message_view'])->name('message_view');
    Route::get('/admin/message/delete/{id}', [MessageController::class,'message_delete'])->name('message_delete');
    Route::get('/admin/message/mark_as_read/{id}', [MessageController::class,'message_mark_as_read'])->name('message_mark_as_read');
    //populer Service route
    Route::get('/admin/populer_service/list', [PopulerServiceController::class,'populer_service_list'])->name('populer_service_list');
    Route::get('/admin/populer_service/add', [PopulerServiceController::class,'populer_service_add'])->name('populer_service_add');
    Route::post('/admin/populer_service/create', [PopulerServiceController::class,'populer_service_create'])->name('populer_service_create');
    Route::get('/admin/populer_service/edit/{id}', [PopulerServiceController::class,'populer_service_edit'])->name('populer_service_edit');
    Route::post('/admin/populer_service/update', [PopulerServiceController::class,'populer_service_update'])->name('populer_service_update');
    Route::get('/admin/populer_service/delete/{id}', [PopulerServiceController::class,'populer_service_delete'])->name('populer_service_delete');



    Route::get('/admin/logout', [AdminController::class,'logout'])->name('logout');
});
