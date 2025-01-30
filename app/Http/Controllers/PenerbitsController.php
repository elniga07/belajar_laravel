<?php

namespace App\Http\Controllers;
use App\Models\penerbit;

use Illuminate\Http\Request;

class PenerbitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit =penerbit ::all();
        return view('penerbit.index' ,compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.form');
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
            'nama_penerbit' => ['required'],
        ],[
            'nama_penerbit.required' => 'Nama penerbit harus diisi.',]);

            $penerbit = new penerbit();
            $penerbit->nama_penerbit      =$request->nama_penerbit;
            $penerbit->save();
   
            return redirect()->route('penerbit.index')->with('success', 'Data Anda Sudah Tersimpan!');
    }

    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = penerbit::findOrFail($id);
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = penerbit::findOrFail($id);
        return view('penerbit.edit', compact('penerbit'));
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
        $penerbit = penerbit::findOrFail($id);
        $penerbit->nama_penerbit      =$request->nama_penerbit;
        $penerbit->save();

        return redirect()->route('penerbit.index')->with('success', 'Data Anda Sudah Diperbaharui!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = penerbit::findOrFail($id);
        $penerbit->delete();
        return redirect()->route('penerbit.index')->with('success', 'Data Anda Sudah Dihapus!');
    }
}
