<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories= Category::All();
        // dd($categories);
        return view('kategori.index',compact(['categories']));
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        
        $categories =Category::create([
            'name' => $request -> name
        ]);

        return redirect()->route('category.index');
    }

    public function delete($id){
        $categories =Category::find($id);
        $categories -> delete();
        // dd($data);
        return redirect()->route('category.index');
    }
}
