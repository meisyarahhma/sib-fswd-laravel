<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Slider;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function landing(){
        $landing= Produk::All();
        $sliders=Slider::All();
        return view('users.landing',compact(['landing','sliders']));
    }

    public function dashboard(){
        return view('includes.dashboard');
    }

    
}
