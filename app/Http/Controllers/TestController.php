<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //

    public function index(){

        
     //dd(env('DB_PASSWORD'));


        $posts = DB::select('select * from posts');  
        
        dd( $posts);
   

        return view('welcome',['posts'=>$posts]);
    }
}
