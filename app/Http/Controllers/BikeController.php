<?php

namespace App\Http\Controllers;

use App\Models\Product\CityBike;
use App\Models\Product\MountainBike;
use App\Models\Product\RoadBike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BikeController extends Controller
{
    public function index()
    {
        $citybikes = CityBike::all();
        $mountainbikes = MountainBike::all();
        $roadbikes = RoadBike::all();

        return view('bikes.index', compact('roadbikes', 'citybikes', 'mountainbikes'));
    }

    public function addToSession(Request $request)
    {
        $bikeType = $request->input('bike_type');
        $prodNo = $request->input('prod_no');

        // Get the bike data based on type and product number
        $bike = null;
        if ($bikeType === 'citybike') {
        $bike = CityBike::where('id', $prodNo)->first();
        } elseif ($bikeType === 'roadbike') {
            $bike = RoadBike::where('id', $prodNo)->first();
        } elseif ($bikeType === 'mountainbike') {
            // Similar logic for mountain bikes...
        }

        // Store the selected bike in the session
        if ($bike) {
            $selectedBikes = Session::get('selected_bikes', []);
            $selectedBikes[] = $bike;
            Session::put('selected_bikes', $selectedBikes);
        }
        //dd(Session::all());
        return redirect('/bikes')->with('success', 'Bike added to session successfully.');
    }

    public function showSelectedBikes()
    {
        $selectedBikes = Session::get('selected_bikes', []);
        return view('bikes.selected', compact('selectedBikes'));
    }

    public function removeFromSession(Request $request)
    {
        $prodNo = $request->input('prodNo');

        $selectedBikes = Session::get('selected_bikes', []);


        // Find the index of the bike to remove in the selected bikes array
        $index = array_search($prodNo, array_column($selectedBikes, 'id'));

        // Remove the bike from the selected bikes array
        if ($index !== false) {
            unset($selectedBikes[$index]);
            Session::put('selected_bikes', array_values($selectedBikes)); // Re-index the array
        }

        return redirect('/selected-bikes')->with('success', 'Bike removed from session successfully.');
    }
}
