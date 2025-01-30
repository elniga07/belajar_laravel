<?php

namespace App\Http\Controllers;
use App\Models\genre;

use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre =genre ::all();
        return view('genre.index' ,compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genre.form');
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
            'genre' => ['required'],
        ],[
            'genre.required' => 'Genre harus diisi.',]);

            $genre = new genre();
            $genre->genre      =$request->genre;
            $genre->save();
   
            return redirect()->route('genre.index')->with('success', 'Data Anda Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = genre::findOrFail($id);
        return view('genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
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
        $genre = genre::findOrFail($id);
        $genre->genre      =$request->genre;
        $genre->save();

        return redirect()->route('genre.index')->with('success', 'Data Anda Sudah Diperbaharui!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = genre::findOrFail($id);
        $genre->delete();
        return redirect()->route('genre.index')->with('success', 'Data Anda Sudah Dihapus!');
    }
}
