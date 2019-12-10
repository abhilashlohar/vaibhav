<?php

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

Auth::routes();

Route::get('/', 'HomeController@home')->name('home');

Route::prefix('sarkar')->group(function () {
    Route::get('/login', 'admin\AdminController@showAdminLoginForm')->name('showAdminLoginForm');
    Route::post('/login', 'admin\AdminController@AdminLogin')->name('AdminLogin');
    
    Route::get('/dashboard', 'admin\AdminController@dashboard')->name('Admin.dashboard');
    Route::resource('categories','admin\CategoryController');
});