<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Produk::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data produk',
            'data' => $products
        ], 200);
    }

    public function show($id)
    {
        $product = Produk::find($id);

        if ($product) {
            return response()->json([
                'success' => true,
                'message' => 'Detail data produk',
                'data' => $product
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data produk tidak ditemukan',
                'data' => ''
            ], 404);
        }

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'category_id' => 'required',
            'status' => 'required',
            'price' => 'required|integer',
            //'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        // ubah nama file gambar dengan angka random
        //$imageName = time().'.'.$request->gambar->extension(); // 1685433155.jpg

        // upload file gambar ke folder slider
        //Storage::putFileAs('public/produk', $request->file('gambar'), $imageName);

        // insert data ke table sliders
        $produk = Produk::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'price' => $request->price,
            //'gambar' => $imageName,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan',
            'data' => $produk
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required|string|min:3',
            'category_id' => 'required',
            'status' => 'required',
            'price' => 'required|integer',
            //'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        $product = Produk::find($id);

        if ($product) {
            $product = $product->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'status' => $request->status,
                'price' => $request->price,
                //'gambar' => $imageName,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil diupdate',
                'data' => Produk::find($id)
            ], 200);

        } else {
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }

    public function destroy($id)
    {
        $product = Produk::find($id);

        if ($product) {
            $product->delete();

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus',
                'data' => null
            ], 200);

        } else {

            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }
}