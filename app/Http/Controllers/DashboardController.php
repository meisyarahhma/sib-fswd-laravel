<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function landing(){
        $landing= Produk::All();
        $sliders=Slider::All();
        return view('users.landing',compact(['landing','sliders']));
    }

    public function index()
    {
        if (Auth::user()->role->name == 'User') {
            return redirect()->route('produk');
            // return view('/produk');
        } else {
            return view('includes.dashboard');
        }
        
    }

    
}
