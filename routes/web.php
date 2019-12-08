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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/product-list/{id}', 'HomeController@products')->name('products.list');
Route::get('/enquiry/{id}', 'HomeController@enquiry')->name('enquiry');


Route::get('/enquiry-list', 'EnquiryController@index')->name('enquirylist');





Route::prefix('sarkar')->group(function () {
    Route::resource('categories','admin\CategoryController');
    Route::resource('subcategories','SubCategoryController');
    Route::resource('products','ProductController');
    Route::post('/subcategorieslist', 'SubCategoryController@list')->name('subcategories.list');
});