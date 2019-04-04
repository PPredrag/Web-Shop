<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

/*Model for Slider Images*/
class Picture extends Model
{

	// get all pictures from Picture Data Base
    public function getPisturesSlider(){
		$sliderPicture = DB::table('pictures')->get();
		return $sliderPicture;
    }

}
