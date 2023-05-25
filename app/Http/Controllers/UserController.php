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
        
        $pendaftaran =Pendaftaran::create([
            'name' => $request -> name,
            'role' => $request->role,
            'password' => $request->password,
            'email' => $request->email,
            'telp' => $request->telp,
            'address' => $request->address,
            'foto' => $request->foto,
        ]);

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

    public function totalUser()
    {
        // $user = DB::table('pendaftaran')->get();

        // return view('pendaftaran.role',['role' => $user] );
        return view('pendaftaran.role' );
    }
}
