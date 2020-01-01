<?php
use App\Http\Middleware\CheckRedirect;
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

Route::group(['middleware' => [CheckRedirect::class]], function () {

    Route::get('/', 'HomeController@home')->name('home');


    Route::get('/products/{category}/{subcategory}', 'ProductController@list')->name('products.list');
    Route::get('/products/{product}', 'ProductController@productDetail')->name('products.product-detail');


    Route::get('/send/email', 'HomeController@mail');
    Route::get('/cart', 'CartController@list');
    Route::post('/addTocart', 'CartController@addTocart')->name('addTocart');
    Route::get('/getCookie', 'CartController@getCookie')->name('getCookie');
    Route::get('/checkout', 'OrderController@checkout');
    Route::post('/saveCheckout', 'OrderController@saveCheckout')->name('saveCheckout');
    Route::get('/thanks', 'OrderController@thanks')->name('orders.thanks');

});



Route::prefix('sarkar')->group(function () {

	Route::resource('/users','admin\AdminController');

    Route::get('/', function () {
        return redirect()->route('showAdminLoginForm');
    });

    Route::get('/login', 'admin\AdminController@showAdminLoginForm')->name('showAdminLoginForm');
    Route::post('/login', 'admin\AdminController@AdminLogin')->name('AdminLogin');

    Route::get('/logout', 'admin\AdminController@AdminLogout')->name('AdminLogout');

    Route::get('/dashboard', 'admin\AdminController@dashboard')->name('Admin.dashboard');

    Route::get('/change-password', 'admin\AdminController@changePassword')->name('admin.changepassword');
    Route::put('/change-password', 'admin\AdminController@updatePassword')->name('admin.updatepassword');

    Route::post('/forgotten-password', 'admin\AdminController@forgottenPassword')->name('admin.forgottenpassword');
    Route::get('/reset-password', 'admin\AdminController@resetPassword')->name('admin.passwordreset');

    Route::resource('categories','admin\CategoryController');
    Route::resource('sub-categories','admin\SubCategoryController');

    Route::post('/sub-categories.list','admin\SubCategoryController@list')->name('subcategorylist');

    Route::resource('blog-categories','admin\BlogCategoryController');


    Route::resource('blogs','admin\BlogController');
    Route::resource('enquiries','admin\EnquiryController');
    Route::post('enquiries/reply','admin\EnquiryController@reply')->name('enquiries.reply');

    Route::resource('redirections','admin\RedirectionController');


    Route::post('blogs/upload-img','admin\BlogController@uploadImg')->name('blogs.uploadImg');




    Route::resource('products','admin\ProductController');
    // Route::resource('modules','admin\ModuleController');
    Route::resource('user-rights','admin\UserRightController');
    Route::resource('events','admin\EventController');
    Route::post('events/upload-img','admin\EventController@uploadImg')->name('events.uploadImg');

});

