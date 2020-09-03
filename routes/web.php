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

// Frontend
Route::get('/', 'FrontendController@index')->name('index');

Route::get('contact','FrontendController@contact')->name('contact');

Route::get('subcategory/{id}','FrontendController@subcategory')->name('subcategory');

Route::get('bookdetail/{id}','FrontendController@bookdetail')->name('bookdetail');

Route::get('download/{id}','FrontendController@download')->name('download');

Route::get('book','FrontendController@book')->name('book');

Route::post('order','FrontendController@order')->name('order');
Route::get('ordersuccess','FrontendController@ordersuccess')->name('ordersuccess');

Route::get('subcategorylist/{id}','FrontendController@subcategorylist')->name('subcategorylist');
Route::get('booklist/{id}','FrontendController@booklist')->name('booklist');



Route::get('category','FrontendController@category')->name('category');
Route::get('author','FrontendController@author')->name('author');

Route::get('userlist','FrontendController@userlist')->name('userlist');

Route::post('searchbysubcate','FrontendController@searchbysubcate')->name('searchbysubcate');

Route::post('searchbyaut','FrontendController@searchbyaut')->name('searchbyaut');

Route::get('authorbook/{id}','FrontendController@authorbook')->name('authorbook');

//Route::get('');

Auth::routes();

//Backend

Route::group([ 'middleware'=>'role:admin','prefix'=>'backside','as'=>'backside.'],function(){

Route::resource('/category','CategoryController');
Route::resource('/subcategory','SubcategoryController');
Route::resource('/author','AuthorController');
Route::resource('/book','BookController');
Route::resource('/instock','InstockController');
Route::resource('/order','OrderController');
Route::resource('/instock','InstockController');



//Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('remainder/{id}','BookController@remainder')->name('remainder');

Route::get('confirm/{id}','OrderController@confirm')->name('confirm');

Route::get('dashboard','CategoryController@dashboard')->name('dashboard');

Route::get('detail/{id}/{voucherno}','OrderController@detail')->name('detail');

Route::get('payment/{id}}','BookController@payment')->name('payment');

Route::get('orderconfirm/{id}','OrderController@orderconfirm')->name('orderconfirm');