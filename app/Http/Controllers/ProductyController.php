<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductyController extends Controller
{
    public function index(){
        $produk= Produk::with('category')->get();
        return view('produk.index',compact(['produk']));
    }

    public function status(){
        $produk= Produk::where('status','Waiting')->with('category')->get();
        return view('produk.status',compact(['produk']));
    }

    public function aksi($id){
        $product = Produk::where('id', $id)->with('category')->first();

        if ($product) {
            return view('produk.aksi', compact('product'));
        } else {
            abort(404);
        }
    }

    public function validasi(Request $request, $id){
        Produk::where('id', $id)->update([
            'status' => $request->status,
        ]);

        return redirect()->route('product.status');
    }

    public function show($id)
    {
        $product = Produk::where('status','Accepted')->where('id', $id)->with('category')->first();

        $related = Produk::where('status','Accepted')->where('category_id', $product->category->id)->inRandomOrder()->limit(4)->get();

        if ($product) {
            return view('produk.show', compact('product', 'related'));
        } else {
            abort(404);
        }

    }

    public function detail($id)
    {
        $product = Produk::where('id', $id)->with('category')->first();

        $related = Produk::where('category_id', $product->category->id)->inRandomOrder()->limit(4)->get();

        if ($product) {
            return view('produk.detail', compact('product', 'related'));
        } else {
            abort(404);
        }

    }

    public function produk(){
        $produk= Produk::where('status','Accepted')->get();
        return view('produk.produk',compact(['produk']));
    }

    public function create(){
        $categories= Category::All();
        return view('produk.create', compact('categories')) ;
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'category_id' => 'required',
            'price' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // ubah nama file gambar dengan angka random
        $imageName = time().'.'.$request->gambar->extension(); // 123456778.jpg

        // upload file gambar ke folder 
        Storage::putFileAs('public/produk', $request->file('gambar'), $imageName);

        // insert data ke table 
        if (Auth::user()->role->name == 'Admin') {
            Produk::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'status' => 'Accepted',
                'price' => $request->price,
                'gambar' => $imageName,
            ]);
        } else {
            $produk = Produk::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'status' => 'Waiting',
                'price' => $request->price,
                'gambar' => $imageName,
            ]);
        }
        return redirect()->route('product.index');
    }

    public function update($id){
        $produk= Produk::find($id);
        $categories= Category::All();
        // dd($data);
        return view('produk.update', compact('produk','categories'));
    }

    public function prosesupdate(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'category_id' => 'required',
            'price' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // cek jika user mengupload gambar di form
        if ($request->hasFile('gambar')) {
            // ambil nama file gambar lama dari database
            $old_image = Produk::find($id)->gambar;

            // hapus file gambar lama dari folder 
            Storage::delete('public/produk/'.$old_image);

            // FILE BARU //
            // ubah nama file gambar baru dengan angka random
            $imageName = time().'.'.$request->gambar->extension();

            // upload file gambar ke folder 
            Storage::putFileAs('public/produk', $request->file('gambar'), $imageName);

            // update data
            Produk::where('id', $id)->update([
                'name' => $request->name,
                'category_id' => $request ->category_id,
                'price'=> $request ->price,
                'gambar' => $imageName
            ]);

        } else {
            // jika user tidak mengupload gambar
            // update data sliders hnaya untuk title dan caption
            Produk::where('id', $id)->update([
                'name' => $request->name,
                'category_id' => $request ->category_id,
                'price'=> $request ->price
            ]);
        }
        // dd($data);
        return redirect()->route('product.index');
    }

    public function delete($id){
        $produk= Produk::find($id);
        Storage::delete('public/produk/'.$produk->gambar);
        $produk -> delete();
        // dd($data);
        return redirect()->route('product.index');
    }
}
