<?php

use App\Http\Controllers\homecontroller;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [homecontroller::class,'loadregister'])->name('register');
Route::get('/login', [homecontroller::class, 'loadlogin'])->name('login');
Route::post('/register-user', [homecontroller::class, 'register'])->name('register-user');
Route::post('/login-user', [homecontroller::class, 'login'])->name('login-user');
Route::get('/logout', [homecontroller::class, 'logout'])->name('logout');
Route::get('/profile', [homecontroller::class, 'loadprofile'])->name('profile');
Route::post('/update-profile', [homecontroller::class, 'updateprofile'])->name('update-profile');
Route::get('/blogs',[homecontroller::class,'loadblogs'])->name('blogs');
Route::get('/add-blog',[homecontroller::class,'loadaddblog'])->name('add-blog');
Route::post('/submit-blog',[homecontroller::class,'addblog'])->name('submit-blog');
Route::get('/view-blog/{blog}',[homecontroller::class,'viewblog'])->name('view-blog');