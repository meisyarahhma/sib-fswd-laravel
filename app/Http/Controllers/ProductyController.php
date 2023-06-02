<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

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
        // ubah nama file gambar dengan angka random
        $imageName = time().'.'.$request->gambar->extension(); // 1685433155.jpg

        // upload file gambar ke folder slider
        Storage::putFileAs('public/produk', $request->file('gambar'), $imageName);

        // insert data ke table sliders
        $produk = Produk::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'gambar' => $imageName,
        ]);

        return redirect()->route('product.index');
    }

    public function update($id){
        $produk= Produk::find($id);
        $categories= Category::All();
        // dd($data);
        return view('produk.update', compact('produk','categories'));
    }

    public function prosesupdate(Request $request, $id){
        // cek jika user mengupload gambar di form
        if ($request->hasFile('gambar')) {
            // ambil nama file gambar lama dari database
            $old_image = Produk::find($id)->gambar;

            // hapus file gambar lama dari folder slider
            Storage::delete('public/produk/'.$old_image);

            // FILE BARU //
            // ubah nama file gambar baru dengan angka random
            $imageName = time().'.'.$request->gambar->extension();

            // upload file gambar ke folder slider
            Storage::putFileAs('public/produk', $request->file('gambar'), $imageName);

            // update data sliders
            Slider::where('id', $id)->update([
                'name' => $request->name,
                'category_id' => $request ->category_id,
                'price'=> $request ->price,
                'gambar' => $imageName
            ]);

        } else {
            // jika user tidak mengupload gambar
            // update data sliders hnaya untuk title dan caption
            Slider::where('id', $id)->update([
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
