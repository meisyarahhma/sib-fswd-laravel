<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;

class ProductyController extends Controller
{
    public function index(){
        $produk= Produk::All();
        // dd($categories);
        return view('produk.index',compact(['produk']));
    }

    public function create(){
        $produk= Produk::All();
        $categories= Category::All();
        return view('produk.create', compact('produk','categories')) ;
    }

    public function store(Request $request){
        //mengambil data gambar yang diupload
        $gambar           = $request->file('gambar');

        //mengambil nama gambar
        $nama_gambar      = $gambar->getClientOriginalName();

        //memindahkan gambar ke folder tujuan
        $gambar->move('image',$gambar->getClientOriginalName());

        $upload = new Produk;
        $upload->name = $request->input('name');
        $upload->category_id = $request->input('category_id');
        $upload->price = $request->input('price');
        $upload->gambar       = $nama_gambar;      

        //menyimpan data ke database
        $upload->save();

        return redirect()->route('product.index');
    }

    public function update($id){
        $produk= Produk::find($id);
        $categories= Category::All();
        // dd($data);
        return view('produk.update', compact('produk','categories'));
    }

    public function prosesupdate(Request $request, $id){
        $produk= Produk::find($id);
        $produk -> update([
            'name' => $request -> name,
            'category_id' => $request ->category_id,
            'price'=> $request ->price,
            'gambar' => $request->gambar
        ]);
        // dd($data);
        return redirect()->route('product.index');
    }

    public function delete($id){
        $produk= Produk::find($id);
        $produk -> delete();
        // dd($data);
        return redirect()->route('product.index');
    }
}
