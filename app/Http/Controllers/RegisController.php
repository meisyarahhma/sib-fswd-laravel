<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
    public function regis(){
        return view('auth.registrasi');
    }

    public function store(Request $request){
        
        // dd ($request->all());
        $store =User::create([
            'name' => $request -> name,
            'role_id' => 3,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            // 'foto' => $request->foto,
        ]);

        if($store) {
            return redirect()->route('login')->with('success', 'Register berhasil, silahkan login');
        } else {
            return redirect()->back()->with('error', 'Register gagal, silahkan coba lagi');
        }
    }
}
