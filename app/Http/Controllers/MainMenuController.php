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
	// Return view welcome
    public function main(Picture $picture, Footwear $footewear){
            $data = $picture->getPisturesSlider();
            $dataPictures = $footewear->getPistures();
            $newSeason = $footewear->getPicturesNewSeason();
            $newShoes = $footewear->getPisturesNewProducts();
            $forKids = $footewear->getPicturesForKids();
            $forSale = $footewear->getPicturesForSale();
            $forMen = $footewear->getPicturesForMen();
            $forWomen = $footewear->getPicturesForWomen();
            return view('welcome')->with([ 'data'=>$data,
                                           'dataPictures'=>$dataPictures,
                                           'newSeason'=>$newSeason,
                                           'newShoes'=>$newShoes,
                                           'forKids'=>$forKids,
                                           'forSale'=>$forSale,
                                           'forMen'=>$forMen,
                                           'forWomen'=>$forWomen
                                    ]);

    }

    // Return view women
    public function women(){
        return view('women/women');
    }
    //Return view kids
    public function kids(){
        return view('kids/kids');
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




    public function test(Number $number){

     /*$shop = Shop::find(2);
            //dd($shop);
        $shop->products()->attach(4);
        return view('test');*/
        $broj  = array(15,23,14,21,22);
        $kol = array(24,21,5,6,81);
        $mergeArray = array_combine($broj,$kol);


        $product = Footwear::find(1);
        

        foreach ($mergeArray as $key => $value) {
            $product->numbers()->attach( [ $key  => ['qty'=> $value ]]);
        }
        
        

     // $product = Footwear::find(7);  // trazi id iz Baze moje slucaj NIKE PATIKE id = 1 
      //$product->numbers()->attach([31 => ['qty'=> 45],32 => ['qty' => 5]]); // ubacuje u veznu tabelu  $product = id br.2 i id br.2 iz tabele Shops u pivot tabelu 
       //return redirect()->back();

       //dd($number->getData()); // ovako instanciram funkciju iz Number Modela
    }

public function test2(Number $number){
    $data =$number->getPivotData();
    dd($data);
}

public function test3(Footwear $footewear){
    dd($footewear->getNumberFootwear());
}
}
