<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisController extends Controller
{
    public function regis(){
        return view('auth.registrasi');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'role_id' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|string',
            'phone' => 'required|integer',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
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
