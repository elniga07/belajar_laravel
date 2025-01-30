<?php

namespace App\Http\Controllers;
use App\Models\customer;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer =customer ::all();
        return view('customer.index' ,compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.form');
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
            'nama_customer' => ['required'],
            'gender' => ['required'],
            'contact' => ['required'],
        ], [
            'nama_customer.required' => 'Nama customer harus diisi.',
            'gender.required' => 'Jenis kelamin harus dipilih.',
            'contact.required' => 'Nomor kontak harus diisi.',
        ]);

        $customer = new customer();
         $customer->nama_customer      =$request->nama_customer;
         $customer->gender      =$request->gender;
         $customer->contact      =$request->contact;
         $customer->save();

         return redirect()->route('customer.index')->with('success', 'Data Anda Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = customer::findOrFail($id);
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
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
        $customer = customer::findOrFail($id);
        $customer->nama_customer      =$request->nama_customer;
        $customer->gender        =$request->gender;
        $customer->contact      =$request->contact;
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Data Anda Sudah Diperbaharui!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Data Anda Sudah Dihapus!');
    }
}
