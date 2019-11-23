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

Route::get('/', 'PageController@home')->name('Home');
Route::get('/food', 'PageController@food')->name('Food');
Route::get('/drink', 'PageController@drink')->name('Drink');
Route::get('/booktable', 'PageController@booktable')->name('Booktable');
Route::get('/about', 'PageController@about')->name('About');
Route::get('/contact', 'PageController@contact')->name('Contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/home/message','MessageController');
Route::resource('/home/category','CategoryController');
Route::resource('/home/bestoffer','BestofferController');
Route::resource('/home/menu','MenuController');




