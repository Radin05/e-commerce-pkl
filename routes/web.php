<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangAdminController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
        Route::get('/', function () {
        return view('home');
    });
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::resource('home', HomeController::class);
});

//ini user
Route::get('/', [FrontController::class, 'index']);
Route::get('error', [FrontController::class, 'error']);
Route::get('produk', [FrontController::class, 'produk'])->name('produk');
Route::get('produk/kategori/{id}', [FrontController::class, 'kategori']); //coba cari paham ini
Route::get('detail/{id}', [FrontController::class, 'detail'])->name('detail');
Route::get('checkout', [FrontController::class, 'checkout'])->name('checkout');

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');

Route::post('/keranjang/add/{id}', [KeranjangController::class, 'add'])->name('keranjang.add');
Route::post('/keranjang/update/{id}', [KeranjangController::class, 'update'])->name('keranjang.update');
Route::delete('/keranjang/delete/{id}', [KeranjangController::class, 'delete'])->name('keranjang.delete');
Route::delete('/keranjang/clear', [KeranjangController::class, 'clear'])->name('keranjang.clear');



// Route::middleware(['auth'])->group(function () {
//     Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
//     Route::post('/keranjang', [KeranjangController::class, 'store'])->name('keranjang.store');
//     Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
// });

// Route::get('keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
// Route::post('keranjang/add', [KeranjangController::class, 'addToCart'])->name('keranjang.add');
// Route::post('keranjang/update', [KeranjangController::class, 'update'])->name('keranjang.update');
// Route::delete('keranjang/remove/{produkId}', [KeranjangController::class, 'remove'])->name('keranjang.remove');
// Route::get('keranjang/clear', [KeranjangController::class, 'clear'])->name('keranjang.clear');

// Route::get('keranjang', function () {
//     $keranjangs = Keranjang::all();
//     $produk = Produk::all();
//     return view('keranjang', compact('keranjangs', 'produk'));

//     // Route::get('/keranjang', [KeranjangController::class, 'showCart']);

// });

Route::get('index', function () {
    $kategori = Kategori::all();
    $produk = Produk::all();
    return view('index', compact('kategori', 'produk'));
});


// Route::get('/', function () {
//     $kategori = Kategori::all();
//     $produk = Produk::all();
//     return view('welcome', compact('kategori', 'produk'));
// });

// Route::get('produk', function () {
//     $kategori = Kategori::all();
//     $produk = Produk::all();
//     return view('produk', compact('kategori', 'produk'));
// });
// Route::post('/cart/store', [KeranjangController::class, 'store'])->name('keranjang.store');

Route::get('produk/{id}', [ProdukController::class, 'getProdukById']);

Route::get('detail', function () {
    $kategori = Kategori::all();
    $produk = Produk::all();
    return view('detail', compact('kategori', 'produk'));
});

Route::get('about', function () {
    $kategori = Kategori::all();
    return view('about', compact('kategori'));
});

// Route::get('cart', function () {
//     $kategori = Kategori::all();
//     $keranjangs = Keranjang::all();
//     $produk = Produk::all();
//     return view('cart', compact('kategori', 'keranjangs', 'produk'));

//     Route::get('/cart', [KeranjangController::class, 'showCart']);
// });

Route::get('checkout', function () {
    $kategori = Kategori::all();
    return view('checkout', compact('kategori'));
});

Route::get('profile', function () {
    $kategori = Kategori::all();
    return view('profile', compact('kategori'));
});


Route::get('/pp', function () {
    return view('layouts.app');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::resource('home', HomeController::class);
});

// Route::get('admin/user', [UserController::class, 'show'])->name('user.show');
