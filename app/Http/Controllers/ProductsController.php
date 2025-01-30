<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product =product ::all();
        return view('product.index' ,compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_product' => ['required'],
            'merk' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
        ], [
            'nama_product.required' => 'Nama customer harus diisi.',
            'merk.required' => 'Jenis kelamin harus dipilih.',
            'price.required' => 'Nomor kontak harus diisi.',
            'stock.required' => 'Stock harus diisi.',
        ]);

        $product = new product();
         $product->nama_product      =$request->nama_product;
         $product->merk      =$request->merk;
         $product->price      =$request->price;
         $product->stock      =$request->stock;
         $product->save();

         return redirect()->route('product.index')->with('success', 'Data Anda Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::findOrFail($id);
        $product->nama_product      =$request->nama_product;
        $product->merk        =$request->merk;
        $product->price      =$request->price;
        $product->stock      =$request->stock;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Data Anda Sudah Diperbaharui!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Data Anda Sudah Dihapus!');
    }
}
