<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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
Route:: get ('/products',[
    productcontroller::class,
    'index'
]);
Route:: get ('/products/{id}',[
    productcontroller::class,
    'detail'
]);
Route:: get ('/post',[
    PostsController::class,
    'index'
]);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/product/home',[Productcontroller::class , 'home']);
Route::resource('user', UserController::class);
Route::get('/', [StudentController::class, 'index']);
Route::resource('students',StudentController::class);
Route::middleware('auth')->group(function () {
    Route::resource('product',Productcontroller::class);
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');// Đặt tên route là "user.dashboard"
});
