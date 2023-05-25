<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function landing(){
        return view('pendaftaran.landing');
    }

    public function dashboard(){
        return view('includes.dashboard');
    }

    
}
