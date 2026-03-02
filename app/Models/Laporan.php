<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_posyandu',
        'tanggal',
        'jumlah_balita',
        'jumlah_ibu_hamil',
        'gizi_kurang'
    ];
}