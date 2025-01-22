<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\telepon;
use App\Models\pengguna;

class TeleponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telepon =telepon ::all();
            return view('telepon.index' ,compact('telepon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telepon2 = pengguna::all();
        return view('telepon.form', compact('telepon2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telepon = new telepon();
         $telepon->nomor      =$request->nomor;
         $telepon->id_pengguna      =$request->id_pengguna;
         $telepon->save();

         return redirect()->route('telepon.index')->with('success', 'Data Anda Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telepon = telepon::findOrFail($id);
        return view('telepon.show', compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telepon = telepon::findOrFail($id);
        $pengguna = pengguna::all();
        return view('telepon.edit', compact('telepon','pengguna'));
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
         $telepon = telepon::findOrFail($id);
         $telepon->nomor           =$request->nomor;
         $telepon->id_pengguna          =$request->id_pengguna;
         $telepon->save();

         return redirect()->route('telepon.index')->with('success', 'Data Anda Sudah Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telepon = telepon::findOrFail($id);
        $telepon->delete();
        return redirect()->route('telepon.index')->with('success', 'Data Anda Sudah Dihapus!');
    }
}
