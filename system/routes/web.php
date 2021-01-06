<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('home' , [HomeController::class, 'showHome']);
Route::get('produk' , [HomeController::class, 'showProduk']);
Route::get('kategori' , [HomeController::class, 'showKategori']);
Route::get('template' , [HomeController::class, 'showTemplate']);
Route::get('admin/beranda' ,[HomeController::class, 'showAdminBeranda']);
Route::get('admin/kategori' , [HomeController::class, 'showAdminKategori']);

//kenapa disini ada 2 buah route yang sama ???
Route::get('registrasi' , [AuthController::class, 'showRegistrasi']);
Route::get('login' , [AuthController::class, 'showLogin']);
Route::get('admin/registrasi' , [AuthController::class, 'showAdminRegistrasi']);



// Route::prefix('admin')->group(function(){
// 		Route::resource('admin/produk' , ProdukController::class);
// 		Route::resource('admin/kategori' , KategoriController::class);
// });

Route::post('admin/produk/filter' , [ProdukController::class, 'filter']);
Route::post('produk' , [ClientProdukController::class, 'clientfilter']);


Route::get('admin/produk' , [ProdukController::class, 'index']);
Route::get('admin/produk/create' , [ProdukController::class, 'create']);
Route::post('admin/produk' , [ProdukController::class, 'store']);
Route::get('produk/{produk}' , [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit' , [ProdukController::class, 'edit']);
Route::put('produk/{produk}' , [ProdukController::class, 'update']);
Route::delete('produk/{produk}' , [ProdukController::class, 'destroy']);

Route::get('admin/kategori' , [KategoriController::class, 'index']);
Route::get('admin/kategori/create' , [KategoriController::class, 'create']);
Route::post('admin/kategori' , [KategoriController::class, 'store']);
Route::get('kategori/{kategori}' , [KategoriController::class, 'show']);
Route::get('kategori/{kategori}/edit' , [KategoriController::class, 'edit']);
Route::put('kategori/{kategori}' , [KategoriController::class, 'update']);
Route::delete('kategori/{kategori}' , [KategoriController::class, 'destroy']);


Route::get('admin/user' , [UserController::class, 'index']);
Route::get('admin/user/create' , [UserController::class, 'create']);
Route::post('admin/user' , [UserController::class, 'store']);
Route::get('user/{user}' , [UserController::class, 'show']);
Route::get('user/{user}/edit' , [UserController::class, 'edit']);
Route::put('user/{user}' , [UserController::class, 'update']);
Route::delete('user/{user}' , [UserController::class, 'destroy']);

Route::get('admin/login' , [AuthController::class, 'showAdminLogin']);
Route::post('admin/login' , [AuthController::class, 'loginProsess']);
Route::get('admin/logout' , [AuthController::class, 'logout']);

Route::get('admin/registrasi' , [AuthController::class, 'showRegistrasi']);
Route::post('admin/registrasi' , [AuthController::class, 'registrasiProcess']); 



Route::get('home' , [ClientProdukController::class, 'showHome']);
Route::get('produk' , [ClientProdukController::class, 'showProduk']);
Route::get('kategori' , [ClientProdukController::class, 'showKategori']);
Route::get('detail' , [ClientProdukController::class, 'showDetail']);  