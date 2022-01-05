<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class TestController extends Controller
{
    //
    // public function begin(){
    //     return "In the TestController Method From calling route";
    // }

    public function start(){
      // $array=[
      //    ["arr"=>1,"value"=>"Test 1"],
       //     ["arr"=>2,"value"=>"Test 2"]
       // ];

        //compact 
       // return view('articles.index',compact('array'));

        //with
       // return view('articles.index',['data'=>'$array']);
        



       // 10Dec select *
       //$article = Article::all();
       // return view('articles.index',compact('article'));
    
    
       //Output from last to first
     // $article = Article::latest()->get();
    // return view('articles.index',compact('article'));
      
        //paginate 
      $article = Article::latest()->paginate(5);
      return view('articles.index',compact('article'));
      }
}
