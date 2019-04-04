<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Test;
use DB;
use App\Picture;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Footwear;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard if 'status == 1 it is a Admin'.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Picture $picture, Footwear $footewear)
    {

    try{
          if($pera = Auth::user()->status == 1)
        {   
            return view('dashboard/indexDashboard');
        }
        else{
                // get pictures data from Picture model
            $data = $picture->getPisturesSlider();
            $dataPictures = $footewear->getPistures();
           return view('welcome')->with([ 'data'=>$data,
                                        'dataPictures'=>$dataPictures
                                    ]);
        }  
    }catch(Exception $e)
    {
        return back()->withError('Problem pri logovanju');
    }
        
    }

 
}
    
