<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Footweare;


class Number extends Model
{

  protected $fillable =  ['id', 'footwear_id','qty','number_id'];
    public function footwears(){
    	return $this->belongsToMany('App\Footwear')
    	->withPivot('qty'); 	
    }

    // Get All Data from number table
   public function getData(){

   	$dataNumber = DB::table('numbers')->get();
   	return $dataNumber;

   } 
   public function getPivotData($barcode){
   	 $dataJoin = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                       ->join('numbers','footwear_number.number_id','=','numbers.id') 
   	 								   ->select('footwears.description','numbers.footweareNumber','footwears.barcode','numbers.id')->where('footwears.barcode','=', $barcode)
   	 								   ->get();	
      return $dataJoin; 	 								   
   }

   public function getPivotDataForDelete($id){
     $dataJoin = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                       ->select('footwears.barcode','footwear_number.footwear_id','footwear_number.qty','footwears.name','footwears.id','footwear_number.number_id', 'footwear_number.id')->where('footwear_number.footwear_id','=', $id)
                       ->get(); 
      return $dataJoin;                      
   }

public function dataExists($id,$footweareNumber){
  $data = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')
                                ->select('footwears.barcode','footwear_number.footwear_id','footwear_number.qty','footwears.id','footwear_number.number_id', 'footwear_number.id')
                                  ->where('footwear_number.footwear_id','=', $id)
                                  ->where('footwear_number.number_id','=', $footweareNumber)
                                ->get();
       return $data;                           

}

 
}
