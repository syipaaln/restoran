<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class PelangganController extends Controller
{
    public function index()
    {
        // $pelanggan = Pelanggan::latest()->paginate(5);
        // return view('pelanggan.index', compact('pelanggan'))->with('i', (request()->input('page', 1) - 1) * 5);

        $pelanggan = DB::table('pelanggans')
                    ->get();
        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('pelanggan.index',compact('pelanggan'))->with('pelanggan', $pelanggan);
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'id_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'alamat_pelanggan' => 'required',
            'no_telpon' => 'required',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan berhasil diinput');
    }

    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            // 'id_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'alamat_pelanggan' => 'required',
            'no_telpon' => 'required',
        ]);

        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan berhasil diupdate');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan berhasil dihapus');
    }
}
