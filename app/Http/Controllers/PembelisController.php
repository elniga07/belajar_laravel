<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembeli;

class PembelisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli =pembeli ::all();
        return view('pembeli.index' ,compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.form');
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
            'nama_pembeli' => ['required'],
            'jenis_kelamin' => ['required'],
            'telpon' => ['required'],
        ], [
            'nama_pembeli.required' => 'Nama pembeli harus diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin harus dipilih.',
            'telpon.required' => 'Nomor kontak harus diisi.',
        ]);

        $pembeli = new pembeli();
         $pembeli->nama_pembeli      =$request->nama_pembeli;
         $pembeli->jenis_kelamin      =$request->jenis_kelamin;
         $pembeli->telpon      =$request->telpon;
         $pembeli->save();

         return redirect()->route('pembeli.index')->with('success', 'Data Anda Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
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
        $pembeli = pembeli::findOrFail($id);
        $pembeli->nama_pembeli      =$request->nama_pembeli;
         $pembeli->jenis_kelamin      =$request->jenis_kelamin;
         $pembeli->telpon      =$request->telpon;
        $pembeli->save();

        return redirect()->route('pembeli.index')->with('success', 'Data Anda Sudah Diperbaharui!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success', 'Data Anda Sudah Dihapus!');
    }
}
