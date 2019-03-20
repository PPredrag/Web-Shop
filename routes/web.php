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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',['as'=>'welcome','uses'=>'MainMenuController@main']);
Route::get('/shop',['as'=>'shop','uses'=>'MainMenuController@shop']);
Route::get('/sale',['as'=>'sale','uses'=>'MainMenuController@sale']);
Route::get('/viewCart',['as'=>'viewCart','uses'=>'MainMenuController@viewCart']);
Route::get('/contact',['as'=>'contact','uses'=>'MainMenuController@contact']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/women','MainMenuController@women')->name('women');
Route::get('/kids','MainMenuController@kids')->name('kids');
Route::get('/about','MainMenuController@about')->name('about');
Route::get('/test','MainMenuController@test');


