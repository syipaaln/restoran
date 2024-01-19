<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::latest()->paginate(5);
        return view ('order.index',compact('order'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_order' => 'required',
            'nm_order' => 'required',
            'tgl_order' => 'required',
            'jmlh_order' => 'required',
            'deskripsi' => 'required',
        ]);
        Order::create($request->all());

        return redirect()->route('order.index')->with('success', 'Order Berhasil di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'id_order' => 'required',
            'nm_order' => 'required',
            'tgl_order' => 'required',
            'jmlh_order' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $order->update($request->all());
    
        return redirect()->route('order.index')->with('success', 'Order Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('order.index')->with('success', 'Order Berhasil di Hapus');
    }
}
