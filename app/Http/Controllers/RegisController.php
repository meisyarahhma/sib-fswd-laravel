<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisController extends Controller
{
    public function regis(){
        return view('auth.registrasi');
    }
}
