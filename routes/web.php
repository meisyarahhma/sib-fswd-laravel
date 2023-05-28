<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductyController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
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

Route::get('/user', [UserController::class,'index'])->name('index');
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/store', [UserController::class,'store']); //proses upload
Route::get('/user/update/{id}', [UserController::class,'update'])->name('update');
Route::put('/user/prosesupdate/{id}', [UserController::class,'prosesupdate'])->name('prosesupdate');
// Route::get('/user/detail/{id}', [UserController::class,'detail'])->name('detail');
Route::get('/user/delete/{id}', [UserController::class,'delete'])->name('delete');
// Route::get('app-image/{image}', function($image = null)
// {
//     $file = Storage::get('imgproduct/' . $image);
//     $mimetype = Storage::mimeType('imgproduct/' . $image);
//     return response($file, 200)->header('Content-Type', $mimetype);
// });


Route::get('/', [DashboardController::class,'landing'])->name('landing');
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');


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


Route::get('/grup', [RoleController::class,'index'])->name('role');
Route::get('/grup/create', [RoleController::class,'create'])->name('role.create');
Route::post('/grup/store', [RoleController::class,'store'])->name('role.store');
Route::get('/grup/delete/{id}', [RoleController::class,'delete'])->name('role.delete');


Route::get('/slider', [SliderController::class,'index'])->name('slider.index');
Route::get('/slider/create', [SliderController::class,'create'])->name('slider.create');
Route::post('/slider/store', [SliderController::class,'store'])->name('slider.store');