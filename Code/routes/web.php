<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'HomeController@index');

Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::resource('/book', 'SingleBookController');
Route::resource('/allbook', 'AllBookController');
Route::resource('/category', 'AllBookCategoryController');
//Route::resource('/shelves', 'ShelvesController');
Route::post('/search', 'AllBookController@search');

Route::resource('/profile', 'ProfileController');

Route::group(['middleware' => 'auth'], function () {
  Route::resource('/manageCategory', 'BooksCategoryController');
  Route::resource('/manageBook', 'BooksController');
  Route::resource('/manageUser', 'AdminController');
});

Route::resource('cart', 'CartController');
Route::delete('remove-from-cart', 'CartController@remove');
Route::put('update-cart', 'CartController@update');
Route::resource('checkout', 'OrderController');
Route::view('thankyou', 'pages.thankYou');
Route::resource('/shelves', 'ShelvesController', ['except' => ['create', 'edit', 'show', 'update']]);
// Route::get('/cart/{book_id}', 'CartController@add')->name('cart.add');
// Route::delete('remove-from-cart', 'CartController@remove');
// Route::put('update-cart', 'CartController@update');
