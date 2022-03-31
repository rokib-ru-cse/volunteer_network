<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WordController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/addpost', function(){
    return view('addpost');
})->name('addpost');

// serviceType route
Route::get('/service', [ServiceTypeController::class, 'service'])->name('service');
Route::post('/service', [ServiceTypeController::class, 'addservice'])->name('service');
Route::delete('/service/{id}', [ServiceTypeController::class, 'destroyservice'])->name('destroyservice');
Route::get('/service/{id}', [ServiceTypeController::class, 'editservice'])->name('editservice');
Route::post('/service/{id}', [ServiceTypeController::class, 'eservice'])->name('editservice');
//! serviceType route

// word route
Route::get('/word', [WordController::class, 'word'])->name('word');
Route::post('/word', [WordController::class, 'addword'])->name('word');
Route::delete('/word/{id}', [WordController::class, 'destroyword'])->name('destroyword');
Route::get('/word/{id}', [WordController::class, 'editword'])->name('editword');
Route::post('/word/{id}', [WordController::class, 'eword'])->name('editword');
//! word route

//status route
Route::post('/postdetails/{id}', [StatusController::class, 'updatestatus'])->name('updatestatus');
//!status route

//volunteer route

Route::get('/volunteerprofile/{param}', [VolunteerController::class, 'profile_show'])->name('volunteerprofile');

//!volunteer route




Route::delete('/profile/{id}', [PostController::class, 'destroy'])->name('destroy');
Route::get('/profile', [PostController::class, 'profile_show'])->name('profile');
Route::post('/store', [PostController::class, 'store'])->name('storepost');
Route::post('/edit/{id}', [PostController::class, 'editpost'])->name('editpost');
Route::get('/profile/edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::get('/postdetail/{id}', [PostController::class, 'postdetail'])->name('postdetail');
Route::get('/filter', [PostController::class, 'filter'])->name('filter');

Route::get('/userlist', [UserController::class, 'userlist'])->name('userlist');
Route::get('/volunteerlist', [UserController::class, 'volunteerlist'])->name('volunteerlist');
Route::delete('/xxxx/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');
Route::get('/userlist/{id}', [UserController::class, 'userposts'])->name('userposts');
Route::get('/volunteerlist/{id}', [UserController::class, 'volunteerposts'])->name('volunteerposts');




