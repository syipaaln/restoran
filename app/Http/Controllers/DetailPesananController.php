<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use App\Models\Pesanan;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class DetailPesananController extends Controller
{
    // public function getHarga($IdMenu)
    // {
    //     $menu = Menu::find($IdMenu);

    //     return response()->json(['harga' => $menu->harga]);
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $detailpesanan = DetailPesanan::latest()->paginate(5);
        // return view ('detailpesanan.index',compact('detailpesanan'))->with('i', (request()->input('page', 1) -1) * 5);

        $detailpesanan = DB::table('detail_pesanans')
                ->join('pesanans', 'pesanans.id_pesanan', '=', 'detail_pesanans.id_pesanan')
                ->join('menu', 'menu.id_menu', '=', 'detail_pesanans.id_menu')
                ->get();
        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('detailpesanan.index',compact('detailpesanan'))->with('detailpesanan', $detailpesanan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesanan = Pesanan::all();
        $menu = Menu::all();
        return view('detailpesanan.create', compact('pesanan', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id_detail' => 'required',
            'id_pesanan' => 'required',
            'id_menu' => 'required',
            'jumlah' => 'required',
            'subtotal' => 'required',
        ]);

        DetailPesanan::create($request->all());

        return redirect()->route('detailpesanan.index')->with('success', 'Detail Pesanan Berhasil di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailPesanan $detailpesanan)
    {
        return view('detailpesanan.show',compact('detailpesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailPesanan $detailpesanan)
    {
        $pesanan = Pesanan::all();
        $menu = Menu::all();
        return view('detailpesanan.edit', compact('detailpesanan', 'pesanan', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailPesanan $detailpesanan)
    {
        $request->validate([
            // 'id_detail' => 'required',
            'id_pesanan' => 'required',
            'id_menu' => 'required',
            'jumlah' => 'required',
            'subtotal' => 'required',
        ]);

        $detailpesanan->update($request->all());

        return redirect()->route('detailpesanan.index')->with('success', 'Detail Pesanan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailPesanan $detailpesanan)
    {
        $detailpesanan->delete();

        return redirect()->route('detailpesanan.index')->with('success', 'Detail Pesanan Berhasil di Hapus');
    }
}