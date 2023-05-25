<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductyController;
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
Route::post('/user/prosesupdate/{id}', [UserController::class,'prosesupdate'])->name('prosesupdate');
Route::get('/user/detail/{id}', [UserController::class,'detail'])->name('detail');
Route::get('/user/delete/{id}', [UserController::class,'delete'])->name('delete');
Route::get('app-image/{image}', function($image = null)
{
    $file = Storage::get('imgproduct/' . $image);
    $mimetype = Storage::mimeType('imgproduct/' . $image);
    return response($file, 200)->header('Content-Type', $mimetype);
});


Route::get('/', [DashboardController::class,'landing'])->name('landing');
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');


Route::get('/category', [CategoryController::class,'index'])->name('category.index');


Route::get('/product', [ProductyController::class,'index'])->name('product.index');


Route::get('/grup', [UserController::class,'totalUser'])->name('totalUser');


