<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;



class Footwear extends Model
{

    protected $fillable =  ['id', 'footwear_id','number_id','qty','statusSale','newPrice'];
    public function numbers(){
    	return $this->belongsToMany('App\Number')
                      ->withPivot('qty'); 

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

        $numFoot = DB::table('footwears')->join('footwear_number','footwears.id','=','footwear_number.footwear_id')->select('footwear_number.qty','footwears.name','footwears.brand','footwears.description','footwears.category','footwears.price','footwears.type','footwears.material','footwear_number.number_id')->where('footwears.id','=', $id)->orderBy('footwear_number.number_id','asc')->get();
        return $numFoot;
    }

    // Get Pictures for main page in paart New Season
    public function getPicturesNewSeason(){
        $picture = DB::table('footwears')->where('statusPicture','=', 2)->get();
        return $picture;
    }

    // Get Pictures for main page in paart new Products
    public function getPisturesNewProducts(){
        $data = DB::table('footwears')->where('statusPicture','=', 3)->get();
        return $data;
    }

    // Get Pictures for main page in part Kids
    public function getPicturesForKids(){

        $data = DB::table('footwears')->where('statusPicture','=', 4)->get();
        return $data;
    }
    
     // Get Pictures for main page in part Sale
    public function getPicturesForSale(){

        $data = DB::table('footwears')->where('statusPicture','=', 5)->get();
        return $data;
    }

      // Get Pictures for main page in part Mens
    public function getPicturesForMen(){

        $data = DB::table('footwears')->where([['category','=','muska'],
                                                ['statusPicture','=',6]
                                               
                                                ])->get();
        return $data;
    }
    
       // Get Pictures for main page in part Womens
    public function getPicturesForWomen(){

        $data = DB::table('footwears')->where([['category','=','zenska'],
                                                ['statusPicture','=',7]
                                               
                                                ])->get();
        return $data;
    }

    public function getAllData(){

        $data = DB::table('footwears')->get();
        return $data;
    }

    
}
