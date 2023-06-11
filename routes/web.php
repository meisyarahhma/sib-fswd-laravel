<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductyController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\LandingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layout.main');
// });


Route::get('/', [LandingController::class,'index'])->name('landing');


//login
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login/authenticate', [LoginController::class,'authenticate'])->name('login.authenticate');

Route::get('/produkty/show/{id}', [ProductyController::class, 'show'])->name('produkty.show');

//Registrasi
Route::get('/registrasi', [RegisController::class,'regis'])->name('regis');
Route::post('/registrasi/store', [RegisController::class,'store'])->name('regis.store');


Route::middleware('auth')->group(function(){
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    //produk
    Route::get('/produk', [ProductyController::class,'produk'])->name('produk');
  
    //Admin
    Route::middleware('role:Admin')->group(function(){
        Route::get('/sliders', [SlidersController::class,'index'])->name('sliders');
        Route::get('/sliders/create', [SlidersController::class,'create'])->name('sliders.create');
        Route::post('/sliders/store', [SlidersController::class,'store'])->name('sliders.store');
        Route::get('/sliders/update/{id}', [SlidersController::class,'update'])->name('sliders.update');
        Route::put('/sliders/prosesupdate/{id}', [SlidersController::class,'prosesupdate'])->name('sliders.prosesupdate');
        Route::get('/sliders/delete/{id}', [SlidersController::class,'delete'])->name('sliders.delete');
    });
    
    //Admin & Staff
    Route::middleware('role:Admin|Staff')->group(function(){
        Route::get('/category', [CategoryController::class,'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
        Route::get('/category/delete/{id}', [CategoryController::class,'delete'])->name('category.delete');
        
        Route::get('/product', [ProductyController::class,'index'])->name('product.index');
        Route::get('/product/create', [ProductyController::class,'create'])->name('product.create');
        Route::post('/product/store', [ProductyController::class,'store'])->name('product.store');
        Route::get('/product/update/{id}', [ProductyController::class,'update'])->name('product.update');
        Route::put('/product/prosesupdate/{id}', [ProductyController::class,'prosesupdate'])->name('product.prosesupdate');
        Route::get('/product/delete/{id}', [ProductyController::class,'delete'])->name('product.delete');
    });

    //Admin
    Route::middleware('role:Admin')->group(function(){
        Route::get('/role', [RoleController::class,'index'])->name('role');
        Route::get('/role/create', [RoleController::class,'create'])->name('role.create');
        Route::post('/role/store', [RoleController::class,'store'])->name('role.store');
        Route::get('/role/delete/{id}', [RoleController::class,'delete'])->name('role.delete');
    
        Route::get('/user', [UserController::class,'index'])->name('index');
        Route::get('/user/create', [UserController::class,'create']);
        Route::post('/user/store', [UserController::class,'store']); //proses upload
        Route::get('/user/update/{id}', [UserController::class,'update'])->name('update');
        Route::put('/user/prosesupdate/{id}', [UserController::class,'prosesupdate'])->name('prosesupdate');
        // Route::get('/user/detail/{id}', [UserController::class,'detail'])->name('detail');
        Route::get('/user/delete/{id}', [UserController::class,'delete'])->name('delete');
    });

    // Route::middleware('role:User')->group(function(){
    //     Route::get('/produk', [ProductyController::class,'produk'])->name('produk');
    // });
});
    
