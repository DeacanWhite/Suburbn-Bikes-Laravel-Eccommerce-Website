<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\allProduct;
use Illuminate\View\View;


class allProductController extends Controller
{
    public function bikes(): View
    {
        $allBike = allProduct::where('category', 'bike')->get();
        return view('products.bikes', ['bikes' => $allBike]);
    }
    public function filterBikes($category2): \Illuminate\Http\JsonResponse
    {
        $bikes = allProduct::where('category', 'bike')
            ->where('category2', $category2)
            ->get();

        return response()->json($bikes);
    }

    public function scooters(): View
    {
        $scooters = allProduct::where('category', 'scooter')->get();
        return view('products.scooters', ['scooters' => $scooters]);
    }

    public function apparels(): View
    {
        $apparels = allProduct::where('category', 'apparel')->get();
        return view('products.apparels', ['apparels' => $apparels]);
    }

    public function parts(): View
    {
        $parts = allProduct::where('category', 'part')->get();
        return view('products.parts', ['parts' => $parts]);
    }

}
