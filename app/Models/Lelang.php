<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;
    protected $table = 'lelangs';
    protected $guarded = [];
    protected $fillable = [
        'barangs_id',
        'users_id',
        'tanggal_lelang',
        'harga_awal',
        'harga_akhir',
        'status'
    ];
    
}
