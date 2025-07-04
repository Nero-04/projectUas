<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kendaraan;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahUser = User::count();
        $penjualan = 1000000; // ganti sesuai transaksi jika ada
        $kendaraan = Kendaraan::all();

        return view('dashboard', compact('jumlahUser', 'penjualan', 'kendaraan'));
    }
}
