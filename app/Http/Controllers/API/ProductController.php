<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index (){
        $products = Produk::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data produk',
            'data' => $products
        ], 200);
    }

}
