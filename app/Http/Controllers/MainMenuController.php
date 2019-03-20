<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use App\Number;
use DB;

class MainMenuController extends Controller
{
	// Return view home
    public function main(){
    	return view('welcome');
    }
    // Return view men
    public function shop(){
    	return view('men/men');
    }
    // Return view women
    public function women(){
        return view('women/women');
    }
    //Return view kids
    public function kids(){
        return view('kids/kids');
    }
    // Return view sale
    public function sale(){
    	return view('sale/sale');
    }
    // Return view about us
    public function about(){
        return view('about/about');
    }
    //Return viewCart
    public function viewCart(){
        return view('cart/cart');
    }
    //Return view Conact
    public function contact(){
        return view('contact/contact');
    }
    public function test(){

      $footwear = Footwear::find(1);
           // dd($footwear);
        $footwear->numbers->attach(1);
        return view('test');
    }


}
