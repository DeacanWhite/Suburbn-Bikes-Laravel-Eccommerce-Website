<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart(): response
    {
        return response(view('cart'));
    }


    public function addToCart($prodNo)
    {
        $product = Product::findOrFail($prodNo);

        $cart = session()->get('cart', []);

        if(isset($cart[$prodNo])) {
            $cart[$prodNo]['quantity']++;
        } else {
            $cart[$prodNo] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->img
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->prodNo && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->prodNo]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->prodNo) {
            $cart = session()->get('cart');
            if(isset($cart[$request->prodNo])) {
                unset($cart[$request->prodNo]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function home(): View
    {
        $populars = Product::whereIn('prodNo', [1,2,3,5,9,11])->get();
        return view('home', ['populars' => $populars]);
    }
    public function bikes(): View
    {
        $allBike = Product::where('category', 'bike')->get();
        return view('products.bikes', ['bikes' => $allBike]);
    }
    public function filterBikes($category2): \Illuminate\Http\JsonResponse
    {
        $bikes = Product::where('category', 'bike')
            ->where('category2', $category2)
            ->get();

        return response()->json($bikes);
    }

    public function scooters(): View
    {
        $scooters = Product::where('category', 'scooter')->get();
        return view('products.scooters', ['scooters' => $scooters]);
    }

    public function apparels(): View
    {
        $apparels = Product::where('category', 'apparel')->get();
        return view('products.apparels', ['apparels' => $apparels]);
    }

    public function parts(): View
    {
        $parts = Product::where('category', 'part')->get();
        return view('products.parts', ['parts' => $parts]);
    }

    public function test(): View
    {
        return view('test');
    }
}
