<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;

class RoleController extends Controller
{
    public function index(){
        $roles= role::All();
        // dd($roles);
        return view('roles.role',compact(['roles']));
    }

    public function create(){
        return view('roles.create');
    }

    public function store(Request $request){
        
        $role =role::create([
            'name' => $request -> name
        ]);

        return redirect()->route('role');
    }

    public function delete($id){
        $role =role::find($id);
        $role -> delete();
        // dd($data);
        return redirect()->route('role');
    }
}
