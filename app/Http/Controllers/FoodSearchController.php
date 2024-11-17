<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodSearchController extends Controller
{
    function show(){
        $data = DB::table('menu')->get();
        return view('home')->with(['infos'=>$data]);
    }

    function search(Request $request){
        $search = $request->input('search');
        $infos = DB::table('menu')->where('dish','like','%' .$search. '%')->get();
        return view('home',compact('infos'));
    }
}
