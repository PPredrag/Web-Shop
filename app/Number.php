<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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
}
