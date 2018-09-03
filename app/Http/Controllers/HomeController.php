<?php

namespace App\Http\Controllers;

use App\Corpcategory;
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
    public function index()
    {
        return view('back.dashboard',['active'=>'dashboard']);
    }

    public function corpCategory()
    {
        return view('back.corpCategory',['active'=>'corpcategory']);
    }

    
    public function addCorpCategory(Request $request)
    {
        $this->validate($request,[
            'corpname' => 'required|min:3'
        ]);

        $a = new Corpcategory;
        $a->name = $request->corpname;
        $a->status = 1;
        $a->save();
        return 'ok';
        
    }



    
}
