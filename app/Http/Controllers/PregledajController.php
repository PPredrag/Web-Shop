<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use App\Number;
use Illuminate\Support\Facades\Session;
use DB;

class PregledajController extends Controller
{

	// Function return view of one product with data from Footwear Model
    public function lookProduct(Footwear $footwear,$id){
    	$id= $id;
    	//dd($idFootwear);
    	$data = $footwear->getData($id);
    	//dd($idFootwear);
    	$footwearData = $footwear->getNumberFootwear($id);
    	//dd($footwearData);
        foreach ($footwearData as  $valQty) {
          $qty = $valQty->qty; 
        }
         
    	return view('lookProduct/oneProduct')->with([
    												 'data'=>$data,
                                       				 'footwearData'=>$footwearData,
                                                     'qty'=>$qty,
                                                     'id'=>$id
                                                    ]);
    }

    public function serchProducts(Request $request){
       $search = $request['search'];
       if($search != ""){
        $searchData = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                            ->select('footwear_number.qty','footwears.image1','footwears.image2','footwears.image3','footwears.barcode','footwears.name','footwears.brand','footwears.id')
                                            ->where('image1','like','%' . $search . '%')
                                            ->orWhere('image1','like','%' . $search . '%') 
                                            ->orWhere('image2','like','%' . $search . '%')
                                            ->orWhere('image3','like','%' . $search . '%')
                                            ->orWhere('barcode','like','%' . $search . '%')   
                                            ->orWhere('image1','like','%' . $search . '%')
                                            ->orWhere('name','like','%' . $search . '%')
                                            ->orWhere('category','like','%' . $search . '%')
                                            ->get(); 
                                            

        $request->session()->flash('message', 'Rezultat Pretrage:');
        return view('dashboard/showSearch')->with(['searchData'=>$searchData]);
        }
        else {
            $searchData = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                            ->select('footwear_number.qty','footwears.image1','footwears.image2','footwears.image3','footwears.barcode','footwears.name','footwears.brand','footwears.id')
                                            ->where('image1','like','%' . $search . '%')
                                            ->orWhere('image1','like','%' . $search . '%') 
                                            ->orWhere('image2','like','%' . $search . '%')
                                            ->orWhere('image3','like','%' . $search . '%')
                                            ->orWhere('barcode','like','%' . $search . '%')   
                                            ->orWhere('image1','like','%' . $search . '%')
                                            ->orWhere('name','like','%' . $search . '%')
                                            ->orWhere('category','like','%' . $search . '%')
                                            ->take(0)
                                            ->get();  
        $request->session()->flash('message', 'Niste Uneli kriterijum za pretragu');
        return view('dashboard/showSearch')->with(['searchData'=>$searchData]);
       }
    }
}
