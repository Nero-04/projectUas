@extends('layouts.app') {{-- Ganti sesuai layout utama kamu --}}
@section('content')

<div class="container">
    <h3>Edit Data Kendaraan</h3>

    <form method="POST" action="{{ route('kendaraan.update', $kendaraan->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="plat_nomor" class="form-label">Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control" value="{{ old('plat_nomor', $kendaraan->plat_nomor) }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis" class="form-control" value="{{ old('jenis', $kendaraan->jenis) }}" required>
        </div>

        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" value="{{ old('merk', $kendaraan->merk) }}" required>
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" name="warna" class="form-control" value="{{ old('warna', $kendaraan->warna) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

@endsection
