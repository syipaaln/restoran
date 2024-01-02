<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'id_kategori','nama_menu','harga','deskripsi'
    ];

    // Definisikan relasi ke model Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    // Definisikan relasi ke model DetailPesanan
    public function detailpesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'id_menu', 'id_menu');
    }
}
