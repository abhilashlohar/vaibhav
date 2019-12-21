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

	Route::resource('/users','admin\AdminController');

    Route::get('/login', 'admin\AdminController@showAdminLoginForm')->name('showAdminLoginForm');
    Route::post('/login', 'admin\AdminController@AdminLogin')->name('AdminLogin');

    Route::get('/dashboard', 'admin\AdminController@dashboard')->name('Admin.dashboard');

    Route::resource('/permissions','admin\PermissionController');

    Route::resource('categories','admin\CategoryController');
    Route::resource('sub-categories','admin\SubCategoryController');

    Route::post('/sub-categories.list','admin\SubCategoryController@list')->name('subcategorylist');

    Route::resource('blog-categories','admin\BlogCategoryController');
    Route::resource('blogs','admin\BlogController');
    Route::resource('enquiries','admin\EnquiryController');

    Route::post('blogs/upload-img','admin\BlogController@uploadImg')->name('blogs.uploadImg');
    



    Route::resource('products','admin\ProductController');
});
