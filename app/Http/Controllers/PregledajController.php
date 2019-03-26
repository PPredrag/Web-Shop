<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PregledajController extends Controller
{
    public function lookProduct(){
    	return view('lookProduct/oneProduct');
    }
}
