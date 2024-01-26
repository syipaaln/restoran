<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembeliController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriMenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Order2Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk admin dan pembeli
Route::group(['middleware' => ['auth', 'checkrole2:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk admin
Route::group(['middleware' => ['auth', 'checkrole2:1']], function() {
    Route::get('/admin', [AdminController::class, 'index']);
    // Crud
    Route::resource('menu',App\Http\Controllers\MenuController::class);
    // Route::post('menu/{menu}', [MenuController::class, 'update']);
    Route::resource('kategori',App\Http\Controllers\KategoriController::class);
    Route::resource('pelanggan',App\Http\Controllers\PelangganController::class);
    Route::resource('pesanan',App\Http\Controllers\PesananController::class);
    Route::resource('detailpesanan',App\Http\Controllers\DetailPesananController::class);
    Route::resource('order',App\Http\Controllers\OrderController::class);
    Route::resource('order2',App\Http\Controllers\Order2Controller::class);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole2:2']], function() {
    Route::get('/pembeli', [PembeliController::class, 'index']);

});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth', 'user-access:pembeli'])->group(function () {
//     Route::get('/pembeli', [HomeController::class, 'pembeli'])->name('pembeli');
// });
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::get('/admin', [HomeController::class, 'admin1'])->name('admin');
// });

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->middleware('checkRole:admin');
// Route::get('/pembeli', [App\Http\Controllers\HomeController::class, 'pembeli'])->name('home');

// Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
// Route::get('pembeli', function () { return view('pembeli'); })->middleware(['checkRole:pembeli,admin']);

//menampilkan halaman admin dan pengguna
// Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('/admin');
// Route::get('/pengguna',[App\Http\Controllers\PenggunaController::class,'index'])->name('/pengguna');


// Route::get('/get-harga/{IdMenu}', 'DetailPesananController@getHarga')->name('get-harga');









