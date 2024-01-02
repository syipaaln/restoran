<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori'
    ];

    // Definisikan relasi ke model Menu
    public function menu()
    {
        return $this->hasMany(Menu::class, 'id_kategori', 'id_kategori');
    }
}
