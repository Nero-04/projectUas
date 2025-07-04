@extends('layouts.app') {{-- jika ada layout --}}
@section('content')

<div class="container">
    <h2>Data Kendaraan</h2>
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Plat Nomor</th>
            <th>Jenis</th>
            <th>Merk</th>
            <th>Warna</th>
            <th>Aksi</th>
        </tr>
        @foreach($kendaraan as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->plat_nomor }}</td>
            <td>{{ $k->jenis }}</td>
            <td>{{ $k->merk }}</td>
            <td>{{ $k->warna }}</td>
            <td>
                <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
