<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\product;
use App\Models\order;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order =order ::all();
            return view('order.index' ,compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = customer::all();
        $product = product::all();
        return view('order.form', compact('customer','product'));
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
            'id_product' => ['required'],
            'quantity' => ['required'],
            'order_date' => ['required'],
            'id_customer' => ['required'],
        ], [
            'id_product.required' => 'Id_Product harus diisi.',
            'quantity.required' => 'Quantity harus dipilih.',
            'order_date.required' => 'Order Date harus diisi.',
            'id_customer.required' => 'Id Customer harus diisi.',
        ]);

        $order = new order();
        $order->id_product      =$request->id_product;
        $order->quantity            =$request->quantity;
        $order->order_date            =$request->order_date;
        $order->id_customer      =$request->id_customer;
        $order->save();

        return redirect()->route('order.index')->with('success', 'Data Anda Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = order::findOrFail($id);
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = order::findOrFail($id);
        $product = product::all();
        $customer = customer::all();
        return view('order.edit', compact('order','product','customer'));
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
        $order = order::findOrFail($id);
        $order->id_product      =$request->id_product;
        $order->quantity            =$request->quantity;
        $order->order_date            =$request->order_date;
        $order->id_customer      =$request->id_customer;
        $order->save();

         return redirect()->route('order.index')->with('success', 'Data Anda Sudah Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::findOrFail($id);
        $order->delete();
        return redirect()->route('order.index')->with('success', 'Data Anda Sudah Dihapus!');
    }
}
