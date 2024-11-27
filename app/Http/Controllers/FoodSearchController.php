<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodSearchController extends Controller
{
    function show()
    {
        $data = DB::table('menu')
            ->join('restaurants', 'menu.item_no', '=', 'restaurants.res_no')
            ->select('menu.dish', 'menu.price', 'menu.image', 'restaurants.res_name', 'restaurants.location')
            ->get();

        return view('home')->with(['infos' => $data]);
    }

    function search(Request $request)
    {
        $search = $request->input('search');
        $infos = DB::table('menu')
            ->join('restaurants', 'menu.item_no', '=', 'restaurants.res_no')
            ->where('menu.dish', 'like', '%' . $search . '%')
            ->select('menu.dish', 'menu.price', 'menu.image', 'restaurants.res_name', 'restaurants.location')
            ->get();

        return view('home', compact('infos'));
    }
}
