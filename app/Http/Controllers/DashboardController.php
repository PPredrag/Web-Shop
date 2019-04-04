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
            'barCode'=>'required|numeric',
             'nazivModela'=>'required',
             'nazivBrenda'=>'required',
             'opis'=>'required', 
             'color1'=>'required|not_in:0',  
             'vrstaMaterijala'=>'required|not_in:0',  
             'category'=>'required|not_in:0', 
             'type'=>'required|not_in:0', 
             'price'=>'required|numeric',  
             'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'picture2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'picture3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

            DB::beginTransaction();
        try {
                $barCode = $request['barCode'];
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
                $statusPicture = 0;
                $image2 = "pera";
                $image3 = "laza";
           

                // Insert Picture 1  in a File
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



                  // Insert Picture 2  in a File
                // get picture
                $image = $request->file('picture2');
                // get original picure name to import in DB
                $file2 = $image->getClientOriginalName();
                // store in variable picture name and extension
                $input['imagename'] = $file2;
                // where to store picture
                $destinationPath = public_path('/images/productPictures');
                $img = Image::make($image->getRealPath());
                // Checck if picture exist in path
                if(File::exists($destinationPath.'/'.$input['imagename'])){
                return redirect()->back()->withSuccess('Slika broj 2 sa ovim nazivom postoji');
                    }else{
                        $img->fit(1400, 1400, function ($constraint) {
                        $constraint->upsize();
                        })->save($destinationPath.'/'.$input['imagename']);
                 }



                  // Insert Picture 3 in a File
                // get picture
                $image = $request->file('picture3');
                // get original picure name to import in DB
                $file3 = $image->getClientOriginalName();
                // store in variable picture name and extension
                $input['imagename'] = $file3;
                // where to store picture
                $destinationPath = public_path('/images/productPictures');
                $img = Image::make($image->getRealPath());
                // Checck if picture exist in path
                if(File::exists($destinationPath.'/'.$input['imagename'])){
                return redirect()->back()->withSuccess('Slika  broj 3 sa ovim nazivom postoji');
                    }else{
                        $img->fit(1400, 1400, function ($constraint) {
                        $constraint->upsize();
                        })->save($destinationPath.'/'.$input['imagename']);
                 }


                $insert = new Footwear();
                $insert->barcode = $barCode;
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
                $insert->statusPicture = $statusPicture;
                $insert->image2 = $file2;
                $insert->image3 = $file3;
                $insert->image1 = $file;
                $insert->save();
                $idShoes = $insert->id; 
          

                // data from Number Table
                $dataNumber = $number->getData();
        
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


    public function insertQty(Request $request ,$id ,Number $number){
  

        $idFootweare = $id;
        $footweareNumber = $request['number'];
        $footweareQty = $request['qty'];


        $product = Footwear::find($idFootweare);
        $product->numbers()->attach($footweareNumber,['qty'=> $footweareQty]);

        
         /* $product = Footwear::find(1);  // trazi id iz Baze moje slucaj NIKE PATIKE id = 1 
      $product->numbers()->attach(15,['qty'=>10]); // ubacuje u veznu tabelu  $product = id br.2 i id br.2 iz tabele Shops u pivot tabelu */
       //return view('dashboard/insertProducts');
       /*return view('dashboard/insertNumberQty')->with([
                                                         'data'=> $dataNumber,
                                                          'id' => $idFootweare  
                                                         ]);*/
       return view('dashboard/insertProducts')->withSuccess('Uspešno ste uneli Veličinu i Broj Obuće');

    }
}
