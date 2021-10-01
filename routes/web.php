<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;
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

Route::get('/', [App\Http\Controllers\PagesController::class, 'showIndex'])->name('main');
Route::get('/okhota-i-rybalka', [App\Http\Controllers\PagesController::class, 'showOir'])->name('okhota');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'showAbout'])->name('about');

Route::get('/gallery', [App\Http\Controllers\PagesController::class, 'showGallery'])->name('gallery');
Route::get('/price', [App\Http\Controllers\PagesController::class, 'showPrice'])->name('price');
Route::get('/contacts', [App\Http\Controllers\PagesController::class, 'showContacts'])->name('contacts');
Route::resource('reviews', ReviewsController::class);
//Auth::routes();
//Точки доступа к авторизации на сайте
Route::get('admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Показ ссылки Восстановить пароль
Route::get('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'update'])->name('password.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
