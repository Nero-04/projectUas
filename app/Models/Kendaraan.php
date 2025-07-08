<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = [
        'no_polisi',
        'golongan',
        'tinggi_kendaraan',
        'jenis_kendaraan',
        'kendaraan_id',
    ];

    protected $casts = [
        'tinggi_kendaraan' => 'float',
    ];

    protected static function booted()
    {
        static::created(function ($kendaraan) {
            if (empty($kendaraan->kendaraan_id)) {
                $kendaraan->kendaraan_id = str_pad($kendaraan->id, 4, '0', STR_PAD_LEFT);
                $kendaraan->save();
            }
        });
    }
}
