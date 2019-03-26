<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class DashboardController extends Controller
{
	/*Return view for insert Product details*/
    public function insertDataViwe(){
    	return view('dashboard/insertProducts');

    }
    // Insert new Product in DB and Picrure in Image Folder
    public function enterProductData(Request $request){

    	$name = $request['nazivModela'];
    	$brand = $request['nazivBrenda'];
    	$description = $request['opis'];
    	$color = $request['color-filter1'];
    	$color2 = $request['color-filter2'];
    	$material = $request['vrstaMaterijala'];
    	$category = $request['category'];
    	$type = $request['type'];
    	$sale = $request['sale'];
    	$price = $request['price'];
    	$priceNew = 0;
   

    	// Insert Picture in a File
    	// get picture
    	$image = $request->file('picture');
		// get original picure name to import in DB
		$file = $image->getClientOriginalName();
		// store in variable picture name and extension
		$input['imagename'] = $file;
		// where to store picture
		$destinationPath = public_path('/images/productPictures');
		$img = Image::make($image->getRealPath());
		// Checck if picture exist in path
		if(File::exists($destinationPath.'/'.$input['imagename'])){
		return redirect()->back()->withSuccess('Slika sa ovim nazivom postoji');
			}else{
				$img->fit(1400, 1400, function ($constraint) {
				$constraint->upsize();
				})->save($destinationPath.'/'.$input['imagename']);

    }
    	$insert = new Footwear();
    	$insert->name = $name;
    	$insert->brand = $brand;
    	$insert->description = $description;
    	$insert->color = $color;
    	$insert->color2 = $color2;
    	$insert->material = $material;
    	$insert->category = $category;
    	$insert->type = $type;
    	$insert->statusSale = $sale; 
    	$insert->price = $price;
    	$insert->newPrice = $priceNew;
    	$insert->image = $file;

    	$insert->save();
    	return redirect()->back();




}
}
