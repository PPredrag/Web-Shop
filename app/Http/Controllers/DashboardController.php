<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use App\Number;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
	/*Return view for insert Product details*/
    public function insertDataViwe(){
    	return view('dashboard/insertProducts');

    }
    // Insert new Product in DB and Picrure in Image Folder
    public function enterProductData(Request $request, Number $number){

            $this->validate($request, [
             'nazivModela'=>'required',
             'nazivBrenda'=>'required',
             'opis'=>'required', 
             'color1'=>'required|not_in:0',  
             'vrstaMaterijala'=>'required|not_in:0',  
             'category'=>'required|not_in:0', 
             'type'=>'required|not_in:0', 
             'price'=>'required|numeric',  
             'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

            DB::beginTransaction();
        try {

                $name = $request['nazivModela'];
                $brand = $request['nazivBrenda'];
                $description = $request['opis'];
                $color = $request['color1'];
                $color2 = $request['color2'];
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
                $idShoes = $insert->id; 
          

                // data from Number Table
                $dataNumber = $number->getData();
                session()->flash('nazivModelaF',$name);
                DB::commit();
                return view('dashboard/insertNumberQty')->withSuccess('Uspešno ste uneli podatke Obuće. Molim unesite količinu i veličinu')->with([
                                                         'data'=> $dataNumber,
                                                          'id' => $idShoes  
                                                         ]);

            
        } catch (Exception $e) {
            DB::rollback();
            return view('error');
        }
    	
    }
}
