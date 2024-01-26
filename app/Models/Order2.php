<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order2 extends Model
{
    use HasFactory;

    protected $table = 'order2s';
    protected $primaryKey = 'id_pesan';

    protected $fillable = [
        'nm_pesanan','jmlh_pesanan','tgl_pesanan','deskripsi'
    ];
}