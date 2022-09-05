<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Category;
use DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $role=Auth::user()->type;
         
        if ($role =="user") {
            
            $categories = Category::all();
            $sel = "select *from product order by id desc limit 9 ";
            $res=DB::select( $sel);
             return view('welcome',['categories' => $categories,'data'=>$res]);
         
            Auth::logout();
            Session::flash('blocked', 'Your account has been blocked!');
             return redirect('/login');
        }elseif ($role=="Admin") {
           
           return view('home');
        }
      
    }
}
