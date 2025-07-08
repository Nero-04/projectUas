<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $fillable = [
        'kendaraan_id',
        'no_polisi',
        'golongan',
        'harga',
    ];

    public static function booted()
    {
        static::creating(function ($tarif) {
            $kendaraan = \App\Models\Kendaraan::find($tarif->kendaraan_id);
            if ($kendaraan) {
                $tarif->no_polisi = $kendaraan->no_polisi;
                $tarif->golongan = $kendaraan->golongan;
            }
            $tarif->harga = match($tarif->golongan) {
                'I' => 11000,
                'II', 'III' => 16500,
                'IV', 'V' => 19000,
                default => 0,
            };
        });
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
