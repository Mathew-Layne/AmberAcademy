<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\XMLController;

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

/* //////////////////////////User Controller//////////////////////// */

Route::get('/', [UserController::class, 'home']);
Route::get('/register', [UserController::class, 'registerview']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'loginview']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [Usercontroller::class, 'logout']);
Route::get('/about', [Usercontroller::class, 'about']);
Route::get('/apply', [Usercontroller::class, 'apply']);
// Route::get('/contactus', [ContactController::class, 'contact']);
Route::post('/contactus', [ContactController::class, 'sendmail']);
Route::get('/xml', [XMLController::class, 'xml']);
Route::get('/media', [UserController::class, 'media']);

Route::group(['middleware' => 'user'], function () {

    
    Route::get('/applied/{id}', [UserController::class, 'applied']);
    Route::get('/profile', [Profilecontroller::class, 'profile']);
    Route::get('/editprofile', [Profilecontroller::class, 'editview']);
    Route::post('/editprofile', [Profilecontroller::class, 'editprofile']);
    Route::get('/qual', [Profilecontroller::class, 'qual']);
    Route::get('/addqual', [Profilecontroller::class, 'viewqual']);
    Route::post('/addqual', [Profilecontroller::class, 'addqual']);
    Route::get('/status', [Profilecontroller::class, 'getstatus']);
});



/* ////////////////////////Admin Controller////////////////////////////////// */

Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin', [AdminController::class, 'adminview']);
    Route::get('/addcourse', [AdminController::class, 'courseview']);
    Route::post('/addcourse', [AdminController::class, 'addcourse']);
    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/applications', [AdminController::class, 'applications']);
    Route::get('/payments', [AdminController::class, 'payments']);
    Route::get('/approve/{cid}/{uid}', [AdminController::class, 'approve']);
    Route::get('/deny/{cid}/{uid}', [AdminController::class, 'deny']);

});







