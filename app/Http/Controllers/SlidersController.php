<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    public function index(){
        $sliders=Slider::All();
        return view('sliders.index', compact('sliders'));
    }

    public function detail($id)
    {
        $sliders=Slider::find($id);

        if ($sliders) {
            return view('sliders.detail', compact('sliders'));
        } else {
            abort(404);
        }

    }
    
    public function create(){
        $sliders=Slider::All();
        return view('sliders.create', compact('sliders'));
    }

    public function store(Request $request){
        // ubah nama file gambar dengan angka random
        $imageName = time().'.'.$request->gambar->extension(); // 1685433155.jpg

        // upload file gambar ke folder slider
        Storage::putFileAs('public/slider', $request->file('gambar'), $imageName);

        // insert data ke table sliders
        $sliders = Slider::create([
            'name' => $request->name,
            'gambar' => $imageName
        ]);

        return redirect()->route('sliders');
    }

     public function update(Request $request, $id)
    {
        // cari data berdasarkan id menggunakan find()
        // find() merupakan fungsi eloquent untuk mencari data berdasarkan primary key
        $sliders = Slider::find($id);

        // load view edit.blade.php dan passing data slider
        return view('sliders.update', compact('sliders'));
    }

    public function prosesupdate(Request $request, $id)
    {
        // cek jika user mengupload gambar di form
        if ($request->hasFile('gambar')) {
            // ambil nama file gambar lama dari database
            $old_image = Slider::find($id)->gambar;

            // hapus file gambar lama dari folder slider
            Storage::delete('public/slider/'.$old_image);

            // FILE BARU //
            // ubah nama file gambar baru dengan angka random
            $imageName = time().'.'.$request->gambar->extension();

            // upload file gambar ke folder slider
            Storage::putFileAs('public/slider', $request->file('gambar'), $imageName);

            // update data sliders
            Slider::where('id', $id)->update([
                'name' => $request->name,
                'gambar' => $imageName
            ]);

        } else {
            // jika user tidak mengupload gambar
            // update data sliders hnaya untuk title dan caption
            Slider::where('id', $id)->update([
                'name' => $request->name
            ]);
        }


        // alihkan halaman ke halaman sliders
        return redirect()->route('sliders');
    }

    public function delete($id)
    {
        // cari data berdasarkan id menggunakan find()
        // find() merupakan fungsi eloquent untuk mencari data berdasarkan primary key
        $sliders = Slider::find($id);

        // hapus file gambar dari folder slider
        Storage::delete('public/slider/'.$sliders->gambar);

        // hapus data dari table sliders
        $sliders->delete();

        // alihkan halaman ke halaman sliders
        return redirect()->route('sliders');
    }
}   
