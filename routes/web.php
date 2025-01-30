<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\TeleponsController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PenerbitsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\BukusController;
use App\Http\Controllers\PembelisController;
use App\Http\Controllers\TransaksisController;


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
    return view('welcome');
});

//Route::get('/about', function(){
//    return 'Selamat Datang Di About';
//});
//
//Route::get('/home', function(){
//    return 'Selamat Datang Di Home';
//});
//
//Route::get('/contact', function(){
//    return 'Selamat Datang Di Contact';
//});
//
//Route::get('/siswa', function(){
//    
//    $data_siswa = ['Keyndra', 'Napis', 'Nabil', 'Daffa', 'Opet', 'Agus'];
//
//    return view('tampil',compact('data_siswa'));
//});
//
//// route parameter
//Route::get('/tes/{nama}/{tempat}/{jk}/{agama}/{alamat}', function($nama,$tempat,$jk,$agama,$alamat){
//    return 'Nama : '. $nama . 
//    '<br> Tempat Lahir : '. $tempat . 
//    '<br> Jenis Kelamin : '. $jk . 
//    '<br> Agama : ' . $agama . 
//    '<br> Alamat : ' . $alamat; 
//});
//
//Route::get('/hitungan/{b1}/{b2}', function($b1,$b2){
//    return "Bilangan 1 : " . $b1 . 
//    "<br> Bilangan 1 : " . $b2 . 
//    "<br> Hasilnya : ". $b1 + $b2;
//});
//
//
////latihan 1
//Route::get('strok/{nama}/{telp}/{jb}/{nb}/{jumlah}/{bayar}', function($nama,$telp,$jb,$nb,$jumlah,$bayar){
//
//    switch ($jb) {
//        case 'Handphone':
//        if ($nb == 'Samsung') {
//        $harga = 5000000;
//        }elseif ($nb == 'Poco') {
//        $harga = 3000000;
//        }elseif ($nb == 'Iphone') {
//        $harga = 15000000;
//    };
//            break;
//        
//        case 'Laptop':
//        if ($nb == 'Lenovo') {
//        $harga = 3000000;
//        }elseif ($nb == 'Acer') {
//        $harga = 8000000;
//        }elseif ($nb == 'Mackbook') {
//        $harga = 20000000;
//    };
//            break;
//        
//        case 'TV':
//        if ($nb == 'Thosiba') {
//        $harga = 5000000;
//        }elseif ($nb == 'Samsung') {
//        $harga = 8000000;
//        }elseif ($nb == 'LG') {
//        $harga = 10000000;
//    };
//            break;
//    }
//
//    if ($bayar == 'transfer') {
//        $potong = 50000;
//    } else {
//        $potong = 0;
//    };
//
//    $total = $harga * $jumlah;
//
//    if ($total > 10000000) {
//        $cb = 500000;
//    } else {
//        $cb = 0;
//    };
//
//    $pembayaran = $total - $cb - $potong;
//
//    return "Nama : ". $nama . 
//    "<br> Telpon : " . $telp . 
//    "<br> Jenis Barang : " . $jb . 
//    "<br> Nama Barang : " . $nb . 
//    "<br> Harga : ". $harga . 
//    "<br> Jumlah : " . $jumlah . 
//    "<br> Total : " . $total . 
//    "<br> Chasback : " . $cb .  
//    "<br> Pembayaran : ". $bayar . 
//    "<br> Potongan : " . $potong .  
//    "<br> Total Pembayaran : " . $pembayaran;
//
//});
//
////routing model

Route::get('/post', [PostsController::class, 'menampilkan2']);
Route::get('/barang', [PostsController::class, 'menampilkan']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//crud
Route::resource('siswa', SiswasController::class);

Route::resource('ppdb', PpdbsController::class);

//pengguna
Route::resource('pengguna', PenggunasController::class);
Route::resource('telepon', TeleponsController::class);
Route::resource('kategori', KategorisController::class);
Route::resource('produk', ProduksController::class);
Route::resource('product', ProductsController::class);
Route::resource('customer', CustomersController::class);
Route::resource('order', OrdersController::class);
Route::resource('penerbit', PenerbitsController::class);
Route::resource('genre', GenresController::class);
Route::resource('buku', BukusController::class);
Route::resource('pembeli', PembelisController::class);
Route::resource('transaksi', TransaksisController::class);