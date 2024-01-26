<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'tggl_pesanan','id_pelanggan','id_menu','jumlah','total_harga'
    ];

    // Definisikan relasi ke model DetailPesanan
    public function detailpesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'id_pesanan', 'id_pesanan');
    }

    // Definisikan relasi ke model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    // Definisikan relasi ke model Menu
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }

    // Accessor untuk mengambil harga dari menu terkait
    public function getHargaAttribute()
    {
        return $this->menu->harga;
    }

    // Mutator untuk menghitung total
    public function setTotalAttribute()
    {
        $this->attributes['total_harga'] = $this->jumlah * $this->harga;
    }
}
