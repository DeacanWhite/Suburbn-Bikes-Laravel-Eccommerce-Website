<?php

namespace App\Http\Controllers;

use App\Models\Product\CityBike;
use App\Models\Product\MountainBike;
use App\Models\Product\RoadBike;

class HomeController extends Controller
{
    public function index()
    {
        $citybikes = CityBike::all();
        $mountainbike = MountainBike::all();
        $roadbikes = RoadBike::all();

        return view('home', [
            'citybikes' => $citybikes,
            'mountainbike' => $mountainbike,
            'roadbikes' => $roadbikes,
        ]);
    }
}
