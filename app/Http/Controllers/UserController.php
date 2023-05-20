<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Validator;

class UserController extends Controller
{
    public function index(){
        $pendaftaran = Pendaftaran::All();
        return view('pendaftaran.index',compact(['pendaftaran']));
    }

    public function create(){
        return view('pendaftaran.create');
    }

    public function store(Request $request){
        // dd($request -> except(['_token','submit_btn']));

        //pengecualian upload value tokel dan submit
        // Pendaftaran::create($request -> except(['_token','submit_btn','updated_at','created_at']));
        
        $validator =Pendaftaran::make($request->all(),[
            'name' => 'required',
            'role' => 'required',
            'password' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'address' => 'required',
            'foto' => 'required',
        ]);

        $pendaftaran ['name'] = $request -> name;
        $pendaftaran ['role'] = $request -> role;
        $pendaftaran ['password'] = $request -> password;
        $pendaftaran ['email'] = $request -> email;
        $pendaftaran ['telp'] = $request -> telp;
        $pendaftaran ['address'] = $request -> address;
        $pendaftaran ['foto'] = $request -> foto;
        
        User::create($pendaftaran);

        // $request -> validate({
        //     'name' => 'required',
        //     'role' => 'required',
        //     'password' => 'required',
        //     'email' => 'required',
        //     'telp' => 'required',
        //     'address' => 'required',
        //     'foto' => 'required',
        // });

        // $query = DB::table('pendaftaran') -> insert ([
            // 'name' -> $request -> input ('name');
            // 'role' -> $request -> input ('role');
            // 'password' -> $request -> input ('password');
            // 'email' -> $request -> input ('email');
            // 'telp' -> $request -> input ('telp');
            // 'address' -> $request -> input ('address');
            // 'foto' -> $request -> input ('foto');
        // ]);

        return redirect()->route('index');
    }

    public function update($id){
        $data = Pendaftaran::find($id);
        // dd($data);
        return view('pendaftaran.update', compact('data'));
    }

    public function prosesupdate(Request $request, $id){
        $data = Pendaftaran::find($id);
        $data -> update($request->all());
        // dd($data);
        return redirect()->route('user')->with('success','Data berhasil di update');
    }

    public function detail($id){
        $data = Pendaftaran::find($id);
        // dd($data);
        return view('pendaftaran.detail', compact('data'));
    }

    public function delete($id){
        $data = Pendaftaran::find($id);
        $data -> delete();
        // dd($data);
        return redirect()->route('user')->with('success','Data berhasil di hapus');
    }
}
