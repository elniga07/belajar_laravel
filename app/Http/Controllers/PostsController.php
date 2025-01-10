<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function menampilkan() {
        $barang = barang::all();
        return view('tampil_barang' ,compact('barang'));
    }
    public function menampilkan2() {
        $post = post::where('titel','LIKE','%Modar%')->get();
        return view('tampil_post' ,compact('post'));
    }
}
