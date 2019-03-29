<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footwear extends Model
{
    public function numbers(){
    	return $this->belongsToMany('App\Number');

    }
}
