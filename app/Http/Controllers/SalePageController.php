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
  	
  	$data = DB::table('footwears')->where('statusSale','=',2)->paginate(30);
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

 // sort product from by price
  public function sortPrice(Request $request){

  	$inputData = $request->input('pera');
  	$data = Footwear::where([['statusSale','=',2], ['newPrice','<',$inputData]])->orderBy('newPrice','asc')->get();
  	return $data;
  }

// sort product from by color
  public function sortColor(Request $request){
  	$inputData = $request->input('colorValue');

  	$data = Footwear::where([['statusSale','=',2], ['color','=',$inputData]])->orderBy('newPrice','asc')->get();
  	return $data;
  	//dd($data);
  }


 
   // SECTION FOR SORT WOMEN SALE
  // function to return sort womenSale
  function sortWomen(Request $request){
    $dataInput = $request->women;

    $qtySale = Footwear::where([['statusSale','=',2],['category','=', $dataInput]])->get();
    //dd($qtySale);
    $count = count($qtySale);
    $data = Footwear::where([['statusSale','=',2],['category','=', $dataInput]])->orderBy('newPrice','asc')->paginate(24);
//dd($data);
    return view('sale/womenSale')->with(['data'=>$data,'count'=>$count]);
  }


  // sort product from by price for womenSale view
  public function sortPriceWomen(Request $request){

    $inputData = $request->input('dataRange'); // dataRange is data from  ajax -> data:{dataRange:sortPrice}
    $data = Footwear::where([['statusSale','=',2], ['newPrice','<',$inputData],['category','=','zenska']])->orderBy('newPrice','asc')->get();
    return $data;
  }

  // sort product from biger to smaller(desc) or from saller to biger(asc) women View
  public function sortDescWomen(Request $request){
    $dataSort = $request->input('sendToController');
    $data = Footwear::where([['statusSale','=',2],['category','=','zenska']])->orderBy('newPrice',$dataSort)->get();
    return $data;
  }


  // sort product from by color for WomenView
  public function sortColorWomen(Request $request){
    $inputData = $request->input('colorValue');

    $data = Footwear::where([['statusSale','=',2], ['color','=',$inputData],['category','=','zenska']])->orderBy('newPrice','asc')->get();
    return $data;
    //dd($data);
  }


   // SECTION FOR SORT MAN SALE
  // function to return sort womenSale
  function sortMan(Request $request){
    $dataInput = $request->man;

    $qtySale = Footwear::where([['statusSale','=',2],['category','=', $dataInput]])->get();
    //dd($qtySale);
    $count = count($qtySale);
    $data = Footwear::where([['statusSale','=',2],['category','=', $dataInput]])->orderBy('newPrice','asc')->paginate(24);
//dd($data);
    return view('sale/manSale')->with(['data'=>$data,'count'=>$count]);
  }


  // sort product from by price for MANSale view
  public function sortPriceMan(Request $request){

    $inputData = $request->input('dataRange'); // dataRange is data from  ajax -> data:{dataRange:sortPrice}
    $data = Footwear::where([['statusSale','=',2], ['newPrice','<',$inputData],['category','=','muska']])->orderBy('newPrice','asc')->get();
    return $data;
  }

  // sort product from biger to smaller(desc) or from saller to biger(asc) MAN View
  public function sortDescMan(Request $request){
    $dataSort = $request->input('sendToController');
    $data = Footwear::where([['statusSale','=',2],['category','=','muska']])->orderBy('newPrice',$dataSort)->get();
    return $data;
  }


  // sort product from by color for MANView
  public function sortColorMan(Request $request){
    $inputData = $request->input('colorValue');

    $data = Footwear::where([['statusSale','=',2], ['color','=',$inputData],['category','=','muska']])->orderBy('newPrice','asc')->get();
    return $data;
    //dd($data);
  }


  // SECTION FOR SORT Kids SALE
  // function to return sort womenSale
  function sortKids(Request $request){
    $dataInput = $request->kids;

    $qtySale = Footwear::where([['statusSale','=',2],['category','=', $dataInput]])->get();
    //dd($qtySale);
    $count = count($qtySale);
    $data = Footwear::where([['statusSale','=',2],['category','=', $dataInput]])->orderBy('newPrice','asc')->paginate(24);
//dd($data);
    return view('sale/kidsSale')->with(['data'=>$data,'count'=>$count]);
  }


  // sort product from by price for kidsSale view
  public function sortPriceKids(Request $request){

    $inputData = $request->input('dataRange'); // dataRange is data from  ajax -> data:{dataRange:sortPrice}
    $data = Footwear::where([['statusSale','=',2], ['newPrice','<',$inputData],['category','=','decija']])->orderBy('newPrice','asc')->get();
    return $data;
  }

  // sort product from biger to smaller(desc) or from saller to biger(asc) kids View
  public function sortDescKids(Request $request){
    $dataSort = $request->input('sendToController');
    $data = Footwear::where([['statusSale','=',2],['category','=','decija']])->orderBy('newPrice',$dataSort)->get();
    return $data;
  }


  // sort product from by color for KidsView
  public function sortColorKids(Request $request){
    $inputData = $request->input('colorValue');

    $data = Footwear::where([['statusSale','=',2], ['color','=',$inputData],['category','=','decija']])->orderBy('newPrice','asc')->get();
    return $data;
    //dd($data);
  }




  // SECTION FOR SORT Sneakers SALE
  // function to return sort womenSale
  function sortSneakers(Request $request){
    $dataInput = $request->patike;

    $qtySale = Footwear::where([['statusSale','=',2],['type','=', $dataInput]])->get();
    //dd($qtySale);
    $count = count($qtySale);
    $data = Footwear::where([['statusSale','=',2],['type','=', $dataInput]])->orderBy('newPrice','asc')->paginate(24);
//dd($data);
    return view('sale/sneakers')->with(['data'=>$data,'count'=>$count]);
  }


  // sort product from by price for kidsSale view
  public function sortPriceSneakers(Request $request){

    $inputData = $request->input('dataRange'); // dataRange is data from  ajax -> data:{dataRange:sortPrice}
    $data = Footwear::where([['statusSale','=',2], ['newPrice','<',$inputData],['type','=','patike']])->orderBy('newPrice','asc')->get();
    return $data;
  }

  // sort product from biger to smaller(desc) or from saller to biger(asc) kids View
  public function sortDescSneakers(Request $request){
    $dataSort = $request->input('sendToController');
    $data = Footwear::where([['statusSale','=',2],['type','=','patike']])->orderBy('newPrice',$dataSort)->get();
    return $data;
  }


  // sort product from by color for KidsView
  public function sortColorSneakers(Request $request){
    $inputData = $request->input('colorValue');

    $data = Footwear::where([['statusSale','=',2], ['color','=',$inputData],['type','=','patike']])->orderBy('newPrice','asc')->get();
    return $data;
    //dd($data);
  }



  // SECTION FOR SORT Football SALE
  // function to return sort Football
  function sortFootball(Request $request){
    $dataInput = $request->kopacke;

    $qtySale = Footwear::where([['statusSale','=',2],['type','=', $dataInput]])->get();
    //dd($qtySale);
    $count = count($qtySale);
    $data = Footwear::where([['statusSale','=',2],['type','=', $dataInput]])->orderBy('newPrice','asc')->paginate(24);
//dd($data);
    return view('sale/football')->with(['data'=>$data,'count'=>$count]);
  }


  // sort product from by price for kidsSale view
  public function sortPriceFootball(Request $request){

    $inputData = $request->input('dataRange'); // dataRange is data from  ajax -> data:{dataRange:sortPrice}
    $data = Footwear::where([['statusSale','=',2], ['newPrice','<',$inputData],['type','=','kopacke']])->orderBy('newPrice','asc')->get();
    return $data;
  }

  // sort product from biger to smaller(desc) or from saller to biger(asc) kids View
  public function sortDescFootball(Request $request){
    $dataSort = $request->input('sendToController');
    $data = Footwear::where([['statusSale','=',2],['type','=','kopacke']])->orderBy('newPrice',$dataSort)->get();
    return $data;
  }


  // sort product from by color for KidsView
  public function sortColorFootball(Request $request){
    $inputData = $request->input('colorValue');

    $data = Footwear::where([['statusSale','=',2], ['color','=',$inputData],['type','=','kopacke']])->orderBy('newPrice','asc')->get();
    return $data;
    //dd($data);
  }


 // sort sale part by number Select for ALL SALE

  public function sortNumber(Request $request ,Footwear $footwear){

    $number = $request->numberSelect;
    $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                      ->select('footwears.name','footwears.barcode','footwears.brand','footwears.description','footwears.price','footwears.newPrice','footwears.category','footwear_number.number_id','footwears.image1','footwears.id')
                                      ->where([['statusSale','=', 2],['number_id','=',$number]])->get(); 

    return $data;
  }

 // sort sale part by number Select for Football SALE

  public function sortNumberFootball(Request $request ,Footwear $footwear){

    $number = $request->numberSelect;
    $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                      ->select('footwears.name','footwears.barcode','footwears.brand','footwears.description','footwears.price','footwears.newPrice','footwears.category','footwear_number.number_id','footwears.image1','footwears.id')
                                      ->where([['statusSale','=', 2],['number_id','=',$number],['type','=','kopacke']])->get(); 

    return $data;
  }
  // sort sale part by number Select for Kids SALE

  public function sortNumberKids(Request $request ,Footwear $footwear){

    $number = $request->numberSelect;
    $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                      ->select('footwears.name','footwears.barcode','footwears.brand','footwears.description','footwears.price','footwears.newPrice','footwears.category','footwear_number.number_id','footwears.image1','footwears.id')
                                      ->where([['statusSale','=', 2],['number_id','=',$number],['category','=','decija']])->get(); 

    return $data;
  }

  // sort sale part by number Select for Man SALE
  public function sortNumberMan(Request $request ,Footwear $footwear){

    $number = $request->numberSelect;
    $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                      ->select('footwears.name','footwears.barcode','footwears.brand','footwears.description','footwears.price','footwears.newPrice','footwears.category','footwear_number.number_id','footwears.image1','footwears.id')
                                      ->where([['statusSale','=', 2],['number_id','=',$number],['category','=','muska']])->get(); 

    return $data;
  }


  // sort sale part by number Select for Sneakers SALE
  public function sortNumberSneakers(Request $request ,Footwear $footwear){

    $number = $request->numberSelect;
    $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                      ->select('footwears.name','footwears.barcode','footwears.brand','footwears.description','footwears.price','footwears.newPrice','footwears.category','footwear_number.number_id','footwears.image1','footwears.id')
                                      ->where([['statusSale','=', 2],['number_id','=',$number],['type','=','patike']])->get(); 

    return $data;
  }

 // sort sale part by number Select for Sneakers SALE
  public function sortNumberWomen(Request $request ,Footwear $footwear){

    $number = $request->numberSelect;
    $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                      ->select('footwears.name','footwears.barcode','footwears.brand','footwears.description','footwears.price','footwears.newPrice','footwears.category','footwear_number.number_id','footwears.image1','footwears.id')
                                      ->where([['statusSale','=', 2],['number_id','=',$number],['category','=','zenska']])->get(); 

    return $data;
  }




  // function to searc all data base on keyup (client input)
  public function searchSaleProducts(Request $request){

    $search = $request->search;
    $status = 2;


    $data = DB::table('footwears')->where(function($q) use ($status){
                                   $q->where('statusSale','=',$status); 
                                  })->where(function($q) use ($search){
                                    $q->where('brand','like','%' . $search . '%')
                                      ->orWhere('description','like','%' . $search . '%')   
                                      ->orWhere('name','like','%' . $search . '%')
                                      ->orWhere('category','like','%' . $search . '%');                              
                                })->orderBy('newPrice','asc')->get();

    return $data;
  }

}
