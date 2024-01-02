<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanans';
    protected $primaryKey = 'id_detail';

    protected $fillable = [
        'id_pesanan','id_menu','jumlah','subtotal'
    ];

    // Definisikan relasi ke model Pesanan
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'id_pesanan', 'id_pesanan');
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

    // Mutator untuk menghitung subtotal
    public function setTotalAttribute()
    {
        $this->attributes['subtotal'] = $this->jumlah * $this->harga;
    }
}
