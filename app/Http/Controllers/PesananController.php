<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Menu;
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
                    ->join('menu', 'menu.id_menu', '=', 'pesanans.id_menu')
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
        $menu = Menu::all();
        return view('pesanan.create', compact('pelanggan', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id_pesanan' => 'required',
            'tggl_pesanan' => 'required',
            'id_pelanggan' => 'required',
            'id_menu' => 'required',
            'jumlah' => 'required',
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
        // return view('pesanan.show',compact('pesanan'));

        // Ambil data pesanan dan relasinya (misalnya pelanggan dan menu)
        $pesanan = Pesanan::with('pelanggan', 'menu')->find($pesanan->id_pesanan);

        // Tampilkan view struk pesanan dengan data yang diperlukan
        return view('pesanan.show', compact('pesanan'));
    }

    /**
     * Display the receipt for the specified resource.
     */
    // public function receipt(Pesanan $pesanan)
    // {
    //     // Ambil data pesanan dan relasinya (misalnya pelanggan dan menu)
    //     $pesanan = Pesanan::with('pelanggan', 'menu')->find($pesanan->id_pesanan);

    //     // Tampilkan view struk pesanan dengan data yang diperlukan
    //     return view('pesanan.receipt', compact('pesanan'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        $pelanggan = Pelanggan::all();
        $menu = Menu::all();
        return view('pesanan.edit', compact('pesanan', 'pelanggan', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            // 'id_pesanan' => 'required',
            'tggl_pesanan' => 'required',
            'id_pelanggan' => 'required',
            'id_menu' => 'required',
            'jumlah' => 'required',
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