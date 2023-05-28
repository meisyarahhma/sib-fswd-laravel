<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(){
        $slider= Slider::All();
        // dd($categories);
        return view('slider.index',compact('slider'));
    }

    public function create(){
        $slider= Slider::All();
        return view('slider.create', compact('slider')) ;
    }

    public function store(Request $request){
        //mengambil data gambar yang diupload
        $gambar           = $request->file('gambar');

        //mengambil nama gambar
        $nama_gambar      = $gambar->getClientOriginalName();

        //memindahkan gambar ke folder tujuan
        $gambar->move('slider',$gambar->getClientOriginalName());

        $upload = new Slider;
        $upload->name = $request->input('name');
        $upload->gambar       = $nama_gambar;      

        //menyimpan data ke database
        $upload->save();

        return redirect()->route('slider');
    }


}
