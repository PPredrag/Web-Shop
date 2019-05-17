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

class SalePageController extends Controller
{
    // show all SALE product on SALE page
  public function showAllProductOnSalePge(Footwear $footwear){
  	
  	$data = DB::table('footwears')->where('statusSale','=',2)->paginate(48);
  	//dd($data);
  	$qtySale = Footwear::where('statusSale','=',2)->get();
  	//dd($qtySale);
  	$count = count($qtySale);

  	return view('sale/sale')->with(['data'=>$data,'count'=>$count]);

  } 
    // sort product from biger to smaller(desc) or from saller to biger(asc)
  public function sortDesc(Request $request){
  	$dataSort = $request->input('sendToController');
  	$data = Footwear::where('statusSale','=',2)->orderBy('newPrice',$dataSort)->get();
  	return $data;
  }

  public function sortPrice(Request $request){

  	$inputData = $request->input('pera');
  	$data = Footwear::where([['statusSale','=',2], ['newPrice','<',$inputData]])->orderBy('newPrice','asc')->get();
  	return $data;
  }


  public function sortColor(Request $request){
  	$inputData = $request->input('colorValue');

  	$data = Footwear::where([['statusSale','=',2], ['color','=',$inputData]])->orderBy('newPrice','asc')->get();
  	return $data;
  	//dd($data);
  }

}
