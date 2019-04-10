<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;



class Footwear extends Model
{
    public function numbers(){
    	return $this->belongsToMany('App\Number');

    }
       // Function to get ALL data from Footweare
    public function getPistures(){
		$picture = DB::table('footwears')->get();
		return $picture;
    }

    public function getData($id){

    	$data = DB::table('footwears')->where('id','=', $id)->get();	
    		return $data;
    }

    public function getNumberFootwear($id){

        $numFoot = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')->select('footwear_number.qty','footwears.name','footwears.brand','footwears.description','footwears.category','footwears.price','footwears.type','footwears.material','footwear_number.number_id')->where('footwears.id','=', $id)->get();
        return $numFoot;
    }

    public function getPicturesNewSeason(){
        $picture = DB::table('footwears')->where('statusPicture','=', 2)->get();
        return $picture;
    }
    

    
}
