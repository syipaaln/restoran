<?php

namespace App\Http\Controllers;

use App\Models\Order2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Order2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order2 = Order2::first()->paginate(5);
        return view ('order2.index',compact('order2'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id_pesan' => 'required',
            'nm_pesanan' => 'required',
            'jmlh_pesanan' => 'required',
            'tgl_pesanan' => 'required',
            'deskripsi' => 'required',
        ]);
        Order2::create($request->all());

        return redirect()->route('order2.index')->with('success', 'Order Berhasil di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order2 $order2)
    {
        return view('order2.show',compact('order2'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order2 $order2)
    {
        return view('order2.edit', compact('order2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order2 $order2)
    {
        $request->validate([
            // 'id_pesan' => 'required',
            'nm_pesanan' => 'required',
            'jmlh_pesanan' => 'required',
            'tgl_pesanan' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $order2->update($request->all());
    
        return redirect()->route('order2.index')->with('success', 'Order Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order2 $order2)
    {
        $order2->delete();

        return redirect()->route('order2.index')->with('success', 'Order Berhasil di Hapus');
    }
}
