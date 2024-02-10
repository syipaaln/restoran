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
        // $request->validate([
        //     // 'id_menu' => 'required',
        //     // 'image' => 'required',
        //     'id_kategori' => 'required',
        //     'nama_menu' => 'required',
        //     'harga' => 'required',
        //     'deskripsi' => 'required',
        // ]);
        
        // Menu::create($request->all());

        // return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Input');

        $id = $request->get('id');
        if($id){
            $menu = Menu::find($id);
        } else {
            $menu = new Menu;
        }
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';
            $foto->move($destinationPath, $imageName);
            $menu->foto = $imageName;
        }
        $menu->id_kategori = $request->id_kategori;
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->deskripsi = $request->deskripsi;
        $menu->save();
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
// public function update(Request $request, Menu $menu)
// {
//     // $menu->foto = $request->foto
//     // $menu->nama_menu = $request->nama_menu;
//     // $menu->harga = $request->harga;
//     // $menu->deskripsi = $request->deskripsi;

//     // if($request->has('foto')) {
//     //     $image = $request->file('foto');
//     //     $fileName = time() . '.' . $image->getClientOriginalExtension();
//     //     $image->move(public_path('image/', $fileName));
//     //     $menu->foto = $request->file('foto')->getClientOriginalName();
//     //     $menu->foto = $fileName;
//     // };

//     // $menu->update();

//     // $request->validate([
//     //     // 'id_menu' => 'required',
//     //     'foto' => 'required',
//     //     'id_kategori' => 'required',
//     //     'nama_menu' => 'required',
//     //     'harga' => 'required',
//     //     'deskripsi' => 'required',
//     // ]);

//     // $menu->update($request->all());

//     // return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Update');

//     $id = $request->get('id');
//         if($id){
//             $menu = Menu::find($id);
//         }
//         if($request->hasFile('foto')){
//             $foto = $request->file('foto');
//             $request->validate([
//                 'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             ]);
//             $imageName = time() . '.' . $foto->getClientOriginalExtension();
//             $destinationPath = 'image/';
//             $foto->move($destinationPath, $imageName);
//             $menu->foto = $imageName;
//         }
//         $menu->id_kategori = $request->id_kategori;
//         $menu->nama_menu = $request->nama_menu;
//         $menu->harga = $request->harga;
//         $menu->deskripsi =$request->deskripsi;
//         $menu->save();
//         return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Update');
// }

public function update(Request $request, Menu $menu)
{
    $request->validate([
        'id_kategori' => 'required',
        'nama_menu' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
    ]);

    // Mengupdate data menu tanpa memperbarui foto jika tidak diupload
    $menu->update([
        'id_kategori' => $request->id_kategori,
        'nama_menu' => $request->nama_menu,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
    ]);

    // Cek apakah ada file foto yang diupload
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');

        // Validasi foto baru
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Hapus foto lama (jika ada)
        if ($menu->foto) {
            unlink(public_path('image/' . $menu->foto));
        }

        // Simpan foto baru
        $imageName = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = 'image/';
        $foto->move($destinationPath, $imageName);
        $menu->update(['foto' => $imageName]);
    }

    return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Update');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Menu $menu)
{
    $menu->delete();

    // Hapus foto lama (jika ada)
    if ($menu->foto) {
        unlink(public_path('image/' . $menu->foto));
    }

    return redirect()->route('menu.index')->with('success', 'Menu Berhasil di Hapus');
}

}
