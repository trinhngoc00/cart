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

/*Route::get('/', function () {
    return view('welcome');
}); */
Route::get('home', 'PagesController@getHome'); 
Route::get('shopping-cart', 'PagesController@getShoppingcart');
Route::get('list-product', 'PagesController@getListproduct');
Route::get('meat', 'PagesController@getMeat');
Route::get('product/{id}', 'PagesController@getProduct');
Route::get('handbook', 'PagesController@getHandbook');
Route::get('vegetable', 'PagesController@getVegetable');

Route::post('search', 'PagesController@postSearch');
Route::post('login', 'PagesController@postLogin');

Route::get('loai-san-pham/{type}', [
	'as' => 'loaisanpham',
	'uses' => 'PagesController@getLoaiSp'
]);

// Route::get('add-to-cart/{id}', [
// 	'as' =>'themgiohang',
// 	'uses' => 'PagesController@getAddtoCart'
// ]);
Route::get('AddCart/{id}', 'CartController@AddCart');
// Route::get('DelCart/{id}', 'CartController@DelCart');

Route::post('save-cart', 'CartController@save_cart');