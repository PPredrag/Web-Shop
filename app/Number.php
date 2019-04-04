<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Footweare;


class Number extends Model
{
    public function footwears(){
    	return $this->belongsToMany('App\Footwear')
    	->withPivot('qty'); 	
    }

    // Get All Data from number table
   public function getData(){

   	$dataNumber = DB::table('numbers')->get();
   	return $dataNumber;

   } 
   public function getPivotData(){
   	 $dataJoin = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                       ->join('numbers','footwear_number.number_id','=','numbers.id') 
   	 								   ->select('footwears.description','numbers.footweareNumber')->where('footwear_number.footwear_id','=', 15)
   	 								   ->get();	
      return $dataJoin; 	 								   
   }
}
