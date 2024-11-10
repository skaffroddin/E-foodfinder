<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Restaurant; // Assuming you have this model
// use App\Models\MenuItem;   // Assuming you have this model

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $priceFilter = $request->input('price_filter');
        $cuisineFilter = $request->input('cuisine_filter');

        // Start query for restaurants
        $restaurants = Restaurant::where('name', 'like', '%' . $query . '%');

        // Apply price filter if set
        if ($priceFilter) {
            $restaurants = $restaurants->whereHas('menuItems', function ($query) use ($priceFilter) {
                $query->orderBy('price', $priceFilter);
            });
        }

        // Apply cuisine filter if set
        if ($cuisineFilter != '0') {
            $restaurants = $restaurants->where('cuisine', $cuisineFilter);
        }

        $restaurants = $restaurants->get(); // Execute query

        // Prepare data to return
        $result = [];
        foreach ($restaurants as $restaurant) {
            $menuItems = $restaurant->menuItems; // Assuming a relationship with MenuItem model
            $result[] = [
                'restaurant_name' => $restaurant->name,
                'restaurant_image' => $restaurant->image_url,
                'restaurant_address' => $restaurant->address,
                'menu_items' => $menuItems->map(function ($item) {
                    return ['name' => $item->name, 'price' => $item->price];
                })
            ];
        }

        return response()->json($result);
    }
}
