<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pesanan = Pesanan::latest()->paginate(5);
        // return view ('pesanan.index',compact('pesanan'))->with('i', (request()->input('page', 1) -1) * 5);

        $pesanan = DB::table('pesanans')
                    ->join('pelanggans', 'pesanans.id_pelanggan', '=', 'pelanggans.id_pelanggan')
                    ->get();
        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('pesanan.index',compact('pesanan'))->with('pesanan', $pesanan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('pesanan.create', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id_pesanan' => 'required',
            'id_pelanggan' => 'required',
            'tggl_pesanan' => 'required',
            'total_harga' => 'required',
        ]);

        Pesanan::create($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan Berhasil di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        return view('pesanan.show',compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        $pelanggan = Pelanggan::all();
        return view('pesanan.edit', compact('pesanan', 'pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            // 'id_pesanan' => 'required',
            'id_pelanggan' => 'required',
            'tggl_pesanan' => 'required',
            'total_harga' => 'required',
        ]);

        $pesanan->update($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('pesanan.index')->with('success', 'Pesanan Berhasil di Hapus');
    }
}