<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_polisi',
        'jenis_kendaraan',
        'tinggi_kendaraan',
        'golongan',
    ];

    public static array $jenisKendaraan = ['Truk', 'Mobil Pribadi'];
    public static array $golongan = ['I', 'II', 'III', 'IV', 'V'];
    public static float $maxTinggi = 2.1;
}
