@extends('layouts.app') {{-- Ganti jika tidak pakai layout --}}
@section('content')

<div class="container">
    <h3>Tambah Data Kendaraan</h3>

    <form method="POST" action="{{ route('kendaraan.store') }}">
        @csrf

        <div class="mb-3">
            <label for="plat_nomor" class="form-label">Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" name="warna" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

@endsection
