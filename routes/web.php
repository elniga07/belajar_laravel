<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function(){
    return 'Selamat Datang Di About';
});

Route::get('/home', function(){
    return 'Selamat Datang Di Home';
});

Route::get('/contact', function(){
    return 'Selamat Datang Di Contact';
});

// route parameter
Route::get('/tes/{nama}/{tempat}/{jk}/{agama}/{alamat}', function($nama,$tempat,$jk,$agama,$alamat){
    return 'Nama : '. $nama . 
    '<br> Tempat Lahir : '. $tempat . 
    '<br> Jenis Kelamin : '. $jk . 
    '<br> Agama : ' . $agama . 
    '<br> Alamat : ' . $alamat; 
});

Route::get('/hitungan/{b1}/{b2}', function($b1,$b2){
    return "Bilangan 1 : " . $b1 . 
    "<br> Bilangan 1 : " . $b2 . 
    "<br> Hasilnya : ". $b1 + $b2;
});


//latihan 1
Route::get('strok/{nama}/{telp}/{jb}/{nb}/{jumlah}/{bayar}', function($nama,$telp,$jb,$nb,$jumlah,$bayar){

    switch ($jb) {
        case 'Handphone':
        if ($nb == 'Samsung') {
        $harga = 5000000;
        }elseif ($nb == 'Poco') {
        $harga = 3000000;
        }elseif ($nb == 'Iphone') {
        $harga = 15000000;
    };
            break;
        
        case 'Laptop':
        if ($nb == 'Lenovo') {
        $harga = 3000000;
        }elseif ($nb == 'Acer') {
        $harga = 8000000;
        }elseif ($nb == 'Mackbook') {
        $harga = 20000000;
    };
            break;
        
        case 'TV':
        if ($nb == 'Thosiba') {
        $harga = 5000000;
        }elseif ($nb == 'Samsung') {
        $harga = 8000000;
        }elseif ($nb == 'LG') {
        $harga = 10000000;
    };
            break;
    }

    if ($bayar == 'transfer') {
        $potong = 50000;
    } else {
        $potong = 0;
    };

    $total = $harga * $jumlah;

    if ($total > 10000000) {
        $cb = 500000;
    } else {
        $cb = 0;
    };

    $pembayaran = $total - $cb - $potong;

    return "Nama : ". $nama . 
    "<br> Telpon : " . $telp . 
    "<br> Jenis Barang : " . $jb . 
    "<br> Nama Barang : " . $nb . 
    "<br> Harga : ". $harga . 
    "<br> Jumlah : " . $jumlah . 
    "<br> Total : " . $total . 
    "<br> Chasback : " . $cb .  
    "<br> Pembayaran : ". $bayar . 
    "<br> Potongan : " . $potong .  
    "<br> Total Pembayaran : " . $pembayaran;

});