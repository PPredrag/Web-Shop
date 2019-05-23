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
Route::get('/men',['as'=>'men','uses'=>'MenController@getMenViewdData']);
Route::get('/sale',['as'=>'sale','uses'=>'SalePageController@showAllProductOnSalePge']);
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
Route::get('/forKids','PicturesController@forKids')->name('forKids');
Route::get('/forSale','PicturesController@forSale')->name('forSale');

Route::get('/deleteForMen/{id}','PicturesController@deleteForMen')->name('deleteForMen');
Route::get('/deleteForWomen/{id}','PicturesController@deleteForWomen')->name('deleteForWomen');
Route::get('/deleteForSale/{id}','PicturesController@deleteForSale')->name('deleteForSale');
Route::get('/deleteForKids/{id}','PicturesController@deleteForKids')->name('deleteForKids');
Route::get('/deleteNewShoesPicture/{id}','PicturesController@deleteNewShoesPicture')->name('deleteNewShoesPicture');
Route::post('/insertQty/{id}','DashboardController@insertQty')->name('insertQty');
Route::get('/lookProduct/{id}','PregledajController@lookProduct')->name('lookProduct');
Route::get('/shoesU/{id}','DashboardController@shoesU')->name('shoesU');
Route::get('/deleteNewSeasonPicture/{id}','PicturesController@deleteNewSeasonPicture')->name('deleteNewSeasonPicture');
Route::get('/forMen','PicturesController@forMen')->name('forMen');
Route::get('/forWomen','PicturesController@forWomen')->name('forWomen');
Route::get('/addToCart/{id}','CartController@addToCart')->name('addToCart');
Route::get('/managePictures/{id}','DashboardController@managePictures')->name('managePictures');
Route::post('/changePicturePosition/{id}','DashboardController@changePicturePosition')->name('changePicturePosition');
Route::get('/sizeEnter', function(){
	 return view('dashboard/sizeAndQty/sizeEnter');
})->name('sizeEnter');

Route::get('/findForSize','DashboardController@findForSize')->name('findForSize');
Route::get('/insertDataQtyNumbers/{id}','DashboardController@insertDataQtyNumbers')->name('insertDataQtyNumbers');
Route::get('/showDeletePage', function(){
	 return view('dashboard/delete/showDeletePage');		
})->name('showDeletePage');
Route::get('/findForDelete','DashboardController@findForDelete')->name('findForDelete');
Route::post('/deleteProduct/{id}','DashboardController@deleteProduct')->name('deleteProduct');
Route::post('/changeQtyDelete/{id}','DashboardController@changeQtyDelete')->name('changeQtyDelete');
Route::get('/toSale/{id}','DashboardController@toSale')->name('toSale');
Route::get('/changeToSale/{id}','DashboardController@changeToSale')->name('changeToSale');
Route::get('/sortDesc','SalePageController@sortDesc')->name('sortDesc');
Route::get('/sortPrice','SalePageController@sortPrice')->name('sortPrice');
Route::get('/sortColor','SalePageController@sortColor')->name('sortColor');
// section for Women SAle sort
Route::get('/sortWomen','SalePageController@sortWomen')->name('sortWomen');
Route::get('/sortPriceWomen','SalePageController@sortPriceWomen')->name('sortPriceWomen');
Route::get('/sortDescWomen','SalePageController@sortDescWomen')->name('sortDescWomen');
Route::get('/sortColorWomen','SalePageController@sortColorWomen')->name('sortColorWomen');
// section for Women SAle sort
Route::get('/sortMan','SalePageController@sortMan')->name('sortMan');
Route::get('/sortPriceMan','SalePageController@sortPriceMan')->name('sortPriceMan');
Route::get('/sortDescMan','SalePageController@sortDescMan')->name('sortDescMan');
Route::get('/sortColorMan','SalePageController@sortColorMan')->name('sortColorMan');


// section for Kids Sale sort
Route::get('/sortKids','SalePageController@sortKids')->name('sortKids');
Route::get('/sortPriceKids','SalePageController@sortPriceKids')->name('sortPriceKids');
Route::get('/sortDescKids','SalePageController@sortDescKids')->name('sortDescKids');
Route::get('/sortColorKids','SalePageController@sortColorKids')->name('sortColorKids');

// section for Sneakers
Route::get('/sortSneakers','SalePageController@sortSneakers')->name('sortSneakers');
Route::get('/sortPriceSneakers','SalePageController@sortPriceSneakers')->name('sortPriceSneakers');
Route::get('/sortDescSneakers','SalePageController@sortDescSneakers')->name('sortDescSneakers');
Route::get('/sortColorSneakers','SalePageController@sortColorSneakers')->name('sortColorSneakers');

// section for Football
Route::get('/sortFootball','SalePageController@sortFootball')->name('sortFootball');
Route::get('/sortPriceFootball','SalePageController@sortPriceFootball')->name('sortPriceFootball');
Route::get('/sortDescFootball','SalePageController@sortDescFootball')->name('sortDescFootball');
Route::get('/sortColorFootball','SalePageController@sortColorFootball')->name('sortColorFootball');

// section for numberSort
Route::get('/sortNumber','SalePageController@sortNumber')->name('sortNumber');
Route::get('/sortNumberFootball','SalePageController@sortNumberFootball')->name('sortNumberFootball');
Route::get('/sortNumberKids','SalePageController@sortNumberKids')->name('sortNumberKids');
Route::get('/sortNumberMan','SalePageController@sortNumberMan')->name('sortNumberMan');
Route::get('/sortNumberSneakers','SalePageController@sortNumberSneakers')->name('sortNumberSneakers');
Route::get('/sortNumberWomen','SalePageController@sortNumberWomen')->name('sortNumberWomen');
Route::get('/searchSaleProducts','SalePageController@searchSaleProducts')->name('searchSaleProducts');
 // Section foa a Men Page
Route::get('/sortDescMen','MenController@sortDescMen')->name('sortDescMen');
Route::get('/sortPriceMen','MenController@sortPriceMen')->name('sortPriceMen');
Route::get('/sortNumberMen','MenController@sortNumberMen')->name('sortNumberMen');
Route::get('/sortColorMen','MenController@sortColorMen')->name('sortColorMen');
Route::get('/searchMenProducts','MenController@searchMenProducts')->name('searchMenProducts');

Route::get('/test','SalePageController@test')->name('test');





