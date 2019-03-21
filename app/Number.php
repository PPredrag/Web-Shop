<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    public function footwears(){
    	return $this->belongsToMany('App\Footwear','footwear_number','id_footwear','id_number')
    				->withTimestamps();
    }
}
