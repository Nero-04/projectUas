<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SB Admin 2 CSS (customized layout only) -->
    <style>
        body {
            background-color: #f8f9fc;
        }
        .sidebar {
            min-height: 100vh;
            background: #4e73df;
        }
        .sidebar .nav-link,
        .sidebar .navbar-brand {
            color: white;
        }
        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-3">
        <h4 class="navbar-brand">Admin Tiket Gerbang Tol</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        <h2 class="mb-4">Halaman Utama</h2>

       

        <!-- Placeholder konten lain -->
        <div class="mt-4">
            Selamat datang, <strong>{{ Auth::user()->name ?? 'User' }}</strong>! 🎉
        </div>

        <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <!-- FORM HERE -->
                        <form action="" method="POST" enctype="multipart/form-data">

                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jadwal ID</label><br>
                                        <input type="number" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jenis Kendaraan</label>
                                        <input type="text" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tinggi Kendaraan</label>
                                        <input type="text" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">

                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Plat Nomor</label><br>
                                        <input type="number" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jenis Kendaraan</label>
                                        <input type="text" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tinggi Kendaraan</label>
                                        <input type="text" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">

                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Plat Nomor</label><br>
                                        <input type="number" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jenis Kendaraan</label>
                                        <input type="text" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tinggi Kendaraan</label>
                                        <input type="text" class="" name="" value="" placeholder="">

                                        
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- <div class="container">
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
</div> -->

    </div>
</div>

<!-- Script Bootstrap & Font Awesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
