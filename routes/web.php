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

Route::get('/', 'pagecontroler@index'  );
Route::get('/about', 'pagecontroler@about'  );
Route::get('/profile', 'pagecontroler@profile'  );
Route::get('/showcloss', 'pagecontroler@showcloss'  );
Route::get('/contact', 'pagecontroler@contact'  );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Products','ProductsController');
