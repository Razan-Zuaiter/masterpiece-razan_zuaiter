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



//Admin Auth
Route::middleware('auth:admin')->prefix('/admin')->name('admin.')->group(function () {
  // Route::get('/', 'AdminController@view');
  // Route::post('/', 'AdminController@store');
  Route::resource('/manageCategory', 'BooksCategoryController');
  Route::resource('/manageBook', 'BooksController');
  Route::resource('/manageUser', 'UsersController');
});

//Login Routes
Route::prefix('/admin')->name('admin.')->group(function () {
  Route::namespace('Admin\Auth')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('log-to-admin');
    Route::post('/logout', 'LoginController@logout')->name('logout');
  });
});


//Public Route
Auth::routes();
Route::get('/', 'HomeController@index');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::resource('/book', 'SingleBookController');
Route::resource('/allbook', 'AllBookController');
Route::resource('/category', 'AllBookCategoryController');
Route::post('/search', 'AllBookController@search');

Route::resource('/profile', 'ProfileController')->middleware('auth');
Route::resource('/shelves', 'ShelvesController')->middleware('auth');
Route::resource('cart', 'CartController')->middleware('auth');
Route::delete('remove-from-cart', 'CartController@remove')->middleware('auth');
Route::put('update-cart', 'CartController@update')->middleware('auth');
Route::resource('checkout', 'OrderController')->middleware('auth');
Route::view('thankyou', 'pages.thankYou');
// Route::resource('/shelves', 'ShelvesController', ['except' => ['create', 'edit', 'show', 'update']]);
