<?php

namespace App\Filament\Resources\TarifResource\Pages;

use App\Filament\Resources\TarifResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTarif extends CreateRecord
{
    protected static string $resource = TarifResource::class;

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        // Cari kendaraan_id terkecil yang belum terpakai di tabel tarif (kode)
        $usedKendaraanIds = \App\Models\Tarif::pluck('kendaraan_id')->toArray();
        $allKendaraans = \App\Models\Kendaraan::orderBy('kendaraan_id')->get();
        $selectedKendaraan = null;
        foreach ($allKendaraans as $kendaraan) {
            if (!in_array($kendaraan->id, $usedKendaraanIds)) {
                $selectedKendaraan = $kendaraan;
                break;
            }
        }
        // Jika semua sudah terpakai, ambil kendaraan pertama (atau null)
        if (!$selectedKendaraan && $allKendaraans->count() > 0) {
            $selectedKendaraan = $allKendaraans->first();
        }
        if ($selectedKendaraan) {
            $data['kendaraan_id'] = $selectedKendaraan->id;
            $data['no_polisi'] = $selectedKendaraan->no_polisi;
            $data['golongan'] = $selectedKendaraan->golongan;
        }
        return static::getModel()::create($data);
    }
}
