<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\User\AppointmentController;
use App\Http\Controllers\Admin\GmailController;
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

Route::post('/appointment',[AppointmentController::class,'addappointment'])->name('user.appointment');
Route::get('/download',[AppointmentController::class,'download']);

Route::middleware(['admins'])->group(function () {
    Route::get('/admin/contact',[ContactController::class,'viewcontact'])->name('admin.contact');
    Route::get('/admin/editcontact/{id}',[ContactController::class,'editcontact'])->name('admin.editcontact');
    Route::post('/admin/contactedit/{id}',[ContactController::class,'contactedit'])->name('admin.contactedit');
    
    Route::get('/admin/appointment',[AppointmentController::class,'viewappointment'])->name('admin.appointment');
    Route::get('/admin/deleteappointment/{id}',[AppointmentController::class,'deleteappointment'])->name('admin.deleteapp');

    Route::get('/sendemail/{id}',[GmailController::class,'replyemail'])->name('admin.replyemail');
    Route::post('/sendmessage',[GmailController::class,'sendemail'])->name('gmail.sendgmail');

    Route::get('/admin/profile',[ProfileController::class,'viewprofile'])->name('admin.profile');
    Route::get('/admin/editprofile/{id}',[ProfileController::class,'editprofile'])->name('admin.editprofile');
    Route::post('/admin/profileedit/{id}',[ProfileController::class,'profileedit'])->name('admin.profileedit');

    Route::get('/admin/gallery',[GalleryController::class,'viewgallery'])->name('admin.gallery');
    Route::post('/admin/galleryadd',[GalleryController::class,'addgallery'])->name('gallery.add');
    Route::get('/admin/deletegallery/{id}',[GalleryController::class,'deletegallery'])->name('admin.deletegallery');
    Route::get('/admin/editgallery/{id}',[GalleryController::class,'editgallery'])->name('admin.editgallery');
    Route::post('/admin/updategallery/{id}',[GalleryController::class,'updategallery'])->name('update.gallery');
    Route::post('/admin/imagegallery/{id}',[GalleryController::class,'imagegallery'])->name('update.imagegallery');
});



