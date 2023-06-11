<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produk;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        // mengambil data category
        $categories = Category::all();

        // mengambil data slider
        $sliders = Slider::all();

        if ($request->category) {
            $products = Produk::with('category')->whereHas('category', function ($query) use ($request) {
                $query->where('name', $request->category);
            })->get();
        } else if ($request->min && $request->max) {
            $products = Produk::where('price', '>=', $request->min)->where('price', '<=', $request->max)->get();
        } else {
            // mengambil 8 data produk secara acak
            $products = Produk::inRandomOrder()->limit(8)->get();
        }

        return view('landing', compact('products', 'categories', 'sliders'));
    }
}