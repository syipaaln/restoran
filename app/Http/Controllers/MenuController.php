<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array

        //diakhir first() jika hanya satu data yang diambil

        $menu = DB::table('menu')
                ->join('kategoris', 'menu.id_kategori', '=', 'kategoris.id_kategori')
                ->get();


        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('menu.index',compact('menu'))->with('menu', $menu);

        // $menu = Menu::latest()->paginate(5);
        // return view ('menu.index',compact('menu'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('menu.create')->with('menu', $menu);

        $kategori = Kategori::all();
        return view('menu.create', compact('kategori'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id_menu' => 'required',
            'id_kategori' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);
        Menu::create($request->all());

        return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('menu.show',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $kategori = Kategori::all();
        return view('menu.edit', compact('menu', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
  /**
 * Update the specified resource in storage.
 */
public function update(Request $request, Menu $menu)
{
    $request->validate([
        // 'id_menu' => 'required',
        'id_kategori' => 'required',
        'nama_menu' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
    ]);

    $menu->update($request->all());

    return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Update');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Menu $menu)
{
    $menu->delete();

    return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Hapus');
}

}
