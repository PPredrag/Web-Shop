<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use App\Number;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
        $qty = 0;
        foreach ($footwearData as $valQty) {
          $qty = $valQty->qty; 
        }
         

            return view('lookProduct/oneProduct')->with([
                                                     'data'=>$data,
                                                     'footwearData'=>$footwearData,
                                                     'qty'=>$qty,
                                                     'id'=>$id
                                                    ]);
         
    	
    }

        // search products
    public function serchProducts(Request $request,Footwear $footwear){

       $search = $request['search'];
       $countData = count($footwear->getAllData());
        
        $searchData = DB::table('footwears')->where('image1','like','%' . $search . '%')
                                            ->orWhere('image1','like','%' . $search . '%') 
                                            ->orWhere('image2','like','%' . $search . '%')
                                            ->orWhere('image3','like','%' . $search . '%')
                                            ->orWhere('barcode','like','%' . $search . '%')   
                                            ->orWhere('image1','like','%' . $search . '%')
                                            ->orWhere('name','like','%' . $search . '%')
                                            ->orWhere('category','like','%' . $search . '%')
                                            ->orderBy('created_at', 'desc')   
                                            ->paginate(12);    
           //dd($searchData);                                   
         if(count($searchData) ==0){
            $request->session()->flash('message', 'Nema Rezultata za trazen kriterijum');
            return view('dashboard/showSearch', ['searchData'=>$searchData,'count'=>$countData]);
         } else{
             $request->session()->flash('message', 'Rezultat Pretrage:');
        return view('dashboard/showSearch', ['searchData'=>$searchData,'count'=>$countData]);
         }                                                            
    }


}

