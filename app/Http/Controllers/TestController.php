<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //

    public function index(){

        
     dd(env('APP_ENV'));


        $posts = DB::select('select * from posts');   
   

        return view('welcome',['posts'=>$users]);
    }
}
