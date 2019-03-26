<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

/*Model for Slider Images*/
class Picture extends Model
{
    public function getPisturesSlider(){

    	$status = "1";
		$sliderPicture = DB::table('pictures')->where('status','=','1')->get();
		return $sliderPicture;
    }
}
