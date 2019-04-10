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
Route::get('/sliderPictures','PicturesController@getSliderPictures')->name('sliderPictures');
Route::post('/imageAdd','PicturesController@imageAdd')->name('imageAdd');
		// Route for insert pictures in Main Page
Route::get('/','PicturesController@insertPicturesSlider')->name('pic');
Route::get('/showPictureToDelete', 'PicturesController@showPictureToDelete')->name('showPictureToDelete');
Route::get('/deleteOnePictureSlider/{id}','PicturesController@deleteOnePictureSlider')->name('deleteOnePictureSlider');
Route::get('/unosProizvoda','DashboardController@insertDataViwe')->name('unosProizvoda');
Route::post('/enterProductData','DashboardController@enterProductData')->name('enterProductData');
Route::get('/newSeason','PicturesController@newSeason')->name('newSeason');
Route::post('/imageAddNewSeason','PicturesController@imageAddNewSeason')->name('imageAddNewSeason');
Route::get('/newShoes','PicturesController@newShoes')->name('newShoes');
Route::post('/insertNewShoes','PicturesController@insertNewShoes')->name('insertNewShoes');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/searchProduct','PregledajController@serchProducts')->name('searchProduct');



Route::post('/insertQty/{id}','DashboardController@insertQty')->name('insertQty');
Route::get('/lookProduct/{id}','PregledajController@lookProduct')->name('lookProduct');
Route::get('/shoesU/{id}','DashboardController@shoesU')->name('shoesU');
Route::get('/deleteNewSeasonPicture/{id}','PicturesController@deleteNewSeasonPicture')->name('deleteNewSeasonPicture');





Route::get('/test3','MainMenuController@test3');


