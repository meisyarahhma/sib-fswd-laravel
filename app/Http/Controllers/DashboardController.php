<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function landing(){
        $landing= Produk::All();
        return view('users.landing',compact(['landing']));
    }

    public function dashboard(){
        return view('includes.dashboard');
    }

    
}
