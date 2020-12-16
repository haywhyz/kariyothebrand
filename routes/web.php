<?php

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


Route::get('sign-up','PagesController@getSignup' ) -> name('pages.sign-up');
Route::get('sign-in','PagesController@getSignin' ) -> name('pages.sign-in');
Route::get('product-details','PagesController@getProductdetails' ) -> name('pages.product-details');
Route::get('checkout','PagesController@getCheckout' ) -> name('pages.checkout');
Route::get('shop-cart','PagesController@getShopcart' ) -> name('pages.shop-cart');
Route::get('blog','PagesController@getBlog' ) -> name('pages.blog');
Route::get('shop','PagesController@getShop' ) -> name('pages.shop');
Route::get('contact','PagesController@getContact' ) -> name('pages.contact');
Route::get('women','PagesController@getWomen' ) -> name('pages.women');



Route::get('/','PagesController@getIndex' ) -> name('pages.index');
// Route::resource('posts', 'PostController');
// Route::get('posts/id', 'PostController@show') -> name('posts.show');
// Route::get('posts/id/edit', 'PostController@edit') -> name('posts.edit');
// Route::put('posts/id', 'PostController@update') -> name('posts.update');
// Route::delete('posts/id', 'PostController@destroy') -> name('posts.destroy');


Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('orders/{type?}', 'OrderController@Orders');

});

Route::resource('address','AddressController');



Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    Route::resource('review','ProductReviewController');
});

 

Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');


Route::get('admin/index', 'AdminController@index')->name('admin.index');
