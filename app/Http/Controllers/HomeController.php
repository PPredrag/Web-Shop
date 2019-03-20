<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Test;
use DB;
use Illuminate\Support\Facades\Auth;
use Exception;


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
    public function index()
    {
    try{
          if($pera = Auth::user()->status == 1)
        {   
            return view('dashboard/dashboard');
        }
        else
        {
            return view('welcome');
        }  
    }catch(Exception $e)
    {
        return back()->withError('Problem pri logovanju');
    }
        
    }

 
}
    
