<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use DB;
use Illuminate\Filesystem\Filesystem;
use App\Picture;
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
            'barCode'=>'required|numeric|unique:footwears,barcode',
             'nazivModela'=>'required',
             'nazivBrenda'=>'required',
             'opis'=>'required', 
             'color1'=>'required|not_in:0',  
             'vrstaMaterijala'=>'required|not_in:0',  
             'category'=>'required|not_in:0', 
             'type'=>'required|not_in:0', 
             'sale'=>'required|not_in:0',
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
                
                return view('dashboard/insertProducts')->withSuccess('Uspešno ste uneli proizvod');


            
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

       return view('dashboard/insertProducts')->withSuccess('Uspešno ste uneli Veličinu i Broj Obuće');

    }

    // Ruturn data in Mayor view for managing products
    public function shoesU(Footwear $footwear, $id){
        $data = $footwear->getData($id);
        return view('dashboard/manageProducts')->with([
                                                        'data'=>$data,
                                                         'id'=>$id   
                                                    ]);
    }

    // Return view for changing pictures position 
    public function managePictures(Footwear $footwear, $id){  
        $data = $footwear->getData($id);
        foreach ($data as $value) {
            $status = $value->statusPicture;
        }
        return view('dashboard/managePictures/managePictures')->with([
                                                        'data'=>$data,
                                                         'id'=>$id,
                                                         'status'=>$status   
                                                    ]);
    }

    // Chang pictures positiion on Main Page
    public function changePicturePosition(Request $request, $id){
        $status = $request->statusPicture;
        //dd($status);

        DB::table('footwears')->where('id','=',$id)->limit(1)->update(array('statusPicture' => $status));
        if($status == 2){
            $request->session()->flash('message', 'Uspesno ste promenili Status Slike na delu Nova Sezona');
            return back();
        }
        else if($status == 3){
            $request->session()->flash('message', 'Uspesno ste promenili Status Slike na delu Najnoviji Proizvodi ');
            return back();
        }
         else if($status == 4){
            $request->session()->flash('message', 'Uspesno ste promenili Status Slike na delu Za Najmladje ');
            return back();
        }
        else if($status == 5){
            $request->session()->flash('message', 'Uspesno ste promenili Status Slike na delu Na Popustu');
            return back();
        }
        else if($status == 6){
            $request->session()->flash('message', 'Uspesno ste promenili Status Slike na delu Muška Obuća');
            return back();
        }
        else if($status == 7){
            $request->session()->flash('message', 'Uspesno ste promenili Status Slike na delu Ženska Obuća');
            return back();
        }
        else{
            $request->session()->flash('message', 'Ovaj model se nece prikazivati na glavnoj strani');
            return back();
        }

         
        }
        
 public function findForSize(Request $request,Number $number){
    $barcode =  $request->barcode;
    $dataJoin = $number->getData();
    $data = Footwear::where('barcode','like','%' . $barcode . '%')->get();
    if(count($data)== 0){
        return view('dashboard/sizeAndQty/sizeEnter')->withSuccess('Nema Rezultata za trazen kriterijum,pokušjte ponovo.');
    }

    else if(count($data) > 1){
        return view('dashboard/sizeAndQty/sizeEnter')->withSuccess('Postoji vise proizvoda unetim podacima,pokušjte ponovo');

    }else{
         return view('dashboard/sizeAndQty/showProduct')->with(array('data'=>$data, 'dataJoin'=>$dataJoin));
    }
 }
        /// insert qty an number in data base
     public function insertDataQtyNumbers(Request $request ,$id ,Number $number){
        $this->validate($request, [
        'kolicina' => 'required|numeric'
        ]);
        $idFootweare = $id;
        $footweareNumber = $request['number'];
        $footweareQty = $request['qty'];
        $product = Footwear::find($idFootweare);
         // data from Number Model to check if data exists for ID Footwear and Number   
        $numberSize = $number->dataExists($id,$footweareNumber);

        $qty = 0;
        foreach ($numberSize as $value) {
            $qty = $value->qty;
        }
        $newQty = $qty + $footweareQty;
        
        if($numberSize->isEmpty()){
            $product->numbers()->attach($footweareNumber,['qty'=> $footweareQty]);
            $request->session()->flash('message', 'Uspešno ste uneli Količinu i Broj Obuće' ); 
            return back();
        }
        else{
            $product->numbers()->detach([$footweareNumber]);
            $product->numbers()->attach($idFootweare,['number_id'=> $footweareNumber ,'qty'=> $newQty]);
            $request->session()->flash('message', 'Uspešno ste Dodali Količinu' ); 
            return back();
        }
    }
 
public function findForDelete(Request $request,Number $number){
     $barcode =  $request->barcode;
   
    $data = Footwear::where('barcode','like','%' . $barcode . '%')->get();
     foreach ($data as  $value) {
         $idF = $value->id;
     }
       // data from Umber model
     $dataJoin = $number->getPivotDataForDelete($idF);
    
    if(count($data)== 0){
        return view('dashboard/sizeAndQty/sizeEnter')->withSuccess('Nema Rezultata za trazen kriterijum,pokušjte ponovo.');
    }

    else if(count($data) > 1){
        return view('dashboard/delete/showDeletePage')->withSuccess('Postoji vise proizvoda unetim podacima,pokušjte ponovo');

    }else{
         return view('dashboard/delete/showProductForDelete')->with(array('data'=>$data, 'dataJoin'=>$dataJoin));
    }

}


// function to delete product if QTY is null
public function deleteProduct(Request $request,Number $number, $id){
 //$dataForDelete = $number->getPivotDataForDelete($id);
$data = Footwear::findOrFail($id);
    $data->delete();
    $picture1 = $data->image1;
    $picture2 = $data->image2;
    $picture3 = $data->image3;
        $destinationPath1 = public_path('/images/productPictures/' . $picture1);
        $destinationPath2 = public_path('/images/productPictures/' . $picture2);
        $destinationPath3 = public_path('/images/productPictures/' . $picture3);
         // check if image exists and delete 
        if(File::exists($destinationPath1)) {
        File::delete($destinationPath1);
        }   
        if(File::exists($destinationPath2)) {
        File::delete($destinationPath2);
        } 
        if(File::exists($destinationPath3)) {
        File::delete($destinationPath3);
        } 

       
       return view('dashboard/delete/showDeletePage')->withSuccess('Uspešno ste obrisali proizvod');
}


 // function to cahnge QTY to be able to delete
 public function changeQtyDelete($id,Request $request,Number $number){

    $data = Footwear::where('id','=', $id)->get();
    // data from Number Model
    $dataJoin = $number->getPivotDataForDelete($id);

    return view('dashboard/changeQTY/changeQty')->with(array('data'=>$data, 'dataJoin'=>$dataJoin));
 }


 // return view for change to SALE
 public function toSale(Footwear $footwear,$id){

    $data = $footwear->getData($id);

    foreach ($data as  $value) {
        $status = $value->statusSale;
        $cenaRas = $value->newPrice;
    }

    return view('dashboard/sale/sale')->with(['data'=> $data, 'status'=> $status, 'newPrice'=>$cenaRas]);
 }

 // return new Price and status for SALE
public function changeToSale(Request $request,$id){
    
    $this->validate($request, [
        'cena' => 'required|numeric'
    ]);

  $price = $request->cena;
  $status = 2;
 
  Footwear::where('id','=', $id)->limit(1)->update(array('newPrice'=>$price, 'statusSale'=>$status));  
    return redirect()->back()->withSuccess('Uspešno ste promenili cenu i status proizvoda');
   
}

    
}
