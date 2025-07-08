<?php

namespace App\Filament\Resources\KendaraanResource\Pages;

use App\Filament\Resources\KendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKendaraan extends CreateRecord
{
    protected static string $resource = KendaraanResource::class;

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        // Cari kendaraan_id terkecil yang belum terpakai
        $usedIds = \App\Models\Kendaraan::pluck('kendaraan_id')->map(function($id) {
            return (int) $id;
        })->toArray();
        $newId = 1;
        while (in_array($newId, $usedIds)) {
            $newId++;
        }
        $data['kendaraan_id'] = str_pad($newId, 4, '0', STR_PAD_LEFT);
        return static::getModel()::create($data);
    }
}
