<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $request->session()->put(['mk'=>'Mengkong']);
        

        // also use to set session
        session(['mk2'=>'Mengkong 2']);


        // $session->set('mk','Mengkong');

        //return $request->session()->all();

        //Flash is used to display message in short period of time, 
        //it will auto delete after a period of time
        $request->session()->flash('message','Post has been inserted.');

        $session    =   $request->session()->all();
        return view('home',compact('session'));
    }

    public function deleteSession(Request $request){
        // to delete session
        $request->session()->forget('mk');

        // to delete all session
        //$request->session()->flush();

        $session    =   $request->session()->all();
        return view('home',compact('session'));
    }
}
