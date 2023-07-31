<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require('adminroute.php');

Route::get('/', function () {
    return view('User.frontend');
});



Route::get('/greenspa-login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/greenspa-login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('/allgallery', [GalleryController::class,'viewallgalleryuser'])->name('user.allgallery');

Route::middleware(['admins'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('admin.adminindex');

    Route::get('/greenspa-logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


    Route::get('/admin/home',[AdminController::class,'viewhome'])->name('admin.home');
    Route::get('/admin/edithome/{id}',[AdminController::class,'edithome'])->name('admin.edithome');
    Route::post('/admin/homeedit/{id}',[AdminController::class,'homeedit'])->name('admin.homeedit');

    Route::get('/admin/service',[ServiceController::class,'viewservice'])->name('admin.service');
    Route::post('/admin/serviceadd',[ServiceController::class,'addservice'])->name('service.add');
    Route::get('/admin/deleteservice/{id}',[ServiceController::class,'deleteservice'])->name('admin.deleteservice');

    Route::get('/admin/pricing',[PricingController::class,'viewpricing'])->name('admin.pricing');
    Route::post('/admin/pricingadd',[PricingController::class,'addpricing'])->name('pricing.add');
    Route::get('/admin/allpricing',[PricingController::class,'viewallpricing'])->name('admin.pricings');
    Route::get('/admin/deletepricing/{id}',[PricingController::class,'deletepricing'])->name('admin.deletepricing');
    Route::get('/admin/editpricing/{id}',[PricingController::class,'editpricing'])->name('admin.editpricing');
    Route::post('/admin/updatepricing/{id}',[PricingController::class,'updatepricing'])->name('update.pricing');

    Route::get('/admin/search',[AdminController::class,'search'])->name('admin.search');

});

