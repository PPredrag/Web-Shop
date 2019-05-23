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

class MenController extends Controller
{
   public function getMenViewdData(Request $request,Footwear $footwear){
   		$data = $footwear->menView();
   		$qtyQunt = Footwear::where([['category','=','muska'],['statusSale','=',1]])->get();
   		$count = count($qtyQunt);
   		return view('men/men')->with(['data'=>$data,'count'=>$count]);
 } 

// sort product from biger to smaller(desc) or from saller to biger(asc)
 public function sortDescMen(Request $request){
  	$dataSort = $request->input('sendToController');
  	$data = Footwear::where([['category','=','muska'],['statusSale','=',1]])->orderBy('price',$dataSort)->get();
  	return $data;

}

 // sort product from by price
  public function sortPriceMen(Request $request){

  	$inputData = $request->input('pera');
  	$data = Footwear::where([['category','=','muska'],['statusSale','=',1],['price','<',$inputData ]])->orderBy('price','asc')->get();
  	return $data;
  }


  // sort sale part by number Select for ALL Men 

  public function sortNumberMen(Request $request ,Footwear $footwear){

    $number = $request->numberSelect;
    $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                      ->select('footwears.name','footwears.barcode','footwears.brand','footwears.description','footwears.price','footwears.newPrice','footwears.category','footwear_number.number_id','footwears.image1','footwears.id')
                                      ->where([['category','=','muska'],['number_id','=',$number],['statusSale','=',1]])->get(); 

    return $data;
  }

  // sort product from by color
  public function sortColorMen(Request $request){
  	$inputData = $request->input('colorValue');
  	$data = Footwear::where([['statusSale','=',1], ['color','=',$inputData], ['category','=','muska']])->orderBy('newPrice','asc')->get();
  	return $data;

  }

    // function to searc all data base on keyup (client input)
  public function searchMenProducts(Request $request){

    $search = $request->search;
    $status = 1;
    $category = 'muska';


    $data = DB::table('footwears')->where(function($q) use ($status){
                                   $q->where('statusSale','=',$status); 
                                  })
    							->where(function($q) use ($category){
                                   $q->where('category','=',$category); 
                                  })
    								  ->where(function($q) use ($search){
                                    $q->where('brand','like','%' . $search . '%')
                                      ->orWhere('description','like','%' . $search . '%')   
                                      ->orWhere('name','like','%' . $search . '%')
                                      ->orWhere('category','like','%' . $search . '%');                              
                                })->orderBy('newPrice','asc')->get();

    return $data;
  }


}
