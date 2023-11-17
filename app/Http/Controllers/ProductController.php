<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product\CityBike;
use App\Models\Product\MountainBike;
use App\Models\Product\RoadBike;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cityBikes = CityBike::all();
        $mountainBikes = MountainBike::all();
        $roadBikes = RoadBike::all();

        return view('products.index', compact('cityBikes', 'mountainBikes', 'roadBikes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
