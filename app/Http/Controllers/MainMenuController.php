<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footwear;
use App\Number;
use App\Shop;
use App\Product;
use App\Picture;
use DB;

class MainMenuController extends Controller
{
	// Return view home
    public function main(Picture $picture){
        $data = $picture->getPisturesSlider();
        return view('welcome')->with(array('data'=>$data));
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

     /*$shop = Shop::find(2);
            //dd($shop);
        $shop->products()->attach(4);
        return view('test');*/

      $product = Product::find(1);  // trazi id iz Baze moje slucaj NIKE PATIKE id = 1 
      $product->shops()->attach([1,3,4]); // ubacuje u veznu tabelu  $product = id br.2 i id br.2 iz tabele Shops u pivot tabelu 
       return redirect()->back();
    }


}
