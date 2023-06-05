<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $user = User::with('role')->get();
        return view('users.index',compact('user'));
    }

    public function create(){
        $user = User::All();
        $roles= role::All();
        return view('users.create', compact('user','roles')) ;
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

        $user =User::create([
            'name' => $request -> name,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            // 'foto' => $request->foto,
        ]);

        return redirect()->route('index');
    }

    public function update($id){
        $data = User::find($id);
        $roles= role::All();
        // dd($data);
        return view('users.update', compact('data','roles'));
    }

    public function prosesupdate(Request $request, $id){
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

        $data = User::find($id);
        $data -> update([
            'name' => $request -> name,
            'role_id' => $request->role_id,
            'password' => $request->password,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            // 'foto' => $request->foto,
        ]);
        // dd($data);
        return redirect()->route('index');
    }

    public function delete($id){
        $data = User::find($id);
        $data -> delete();
        // dd($data);
        return redirect()->route('index');
    }

    public function totalUser()
    {
        // $user = DB::table('pendaftaran')->get();

        // return view('pendaftaran.role',['role' => $user] );
        return view('users.role' );
    }
}
