<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use DB;

class PregledajController extends Controller
{

	// Function return view of one product with data from Footwear Model
    public function lookProduct(Footwear $footwear,$id){
    	$idFootwear = $id;
    	//dd($idFootwear);
    	$data = $footwear->getData($id);
    	//dd($idFootwear);
    	$footwearData = $footwear->getNumberFootwear($id);
    	//dd($footwearData);
    	return view('lookProduct/oneProduct')->with([
    												 'data'=>$data,
                                       				 'footwearData'=>$footwearData,
                                                    ]);
    }
}
