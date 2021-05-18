<?php include "koneksi.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard Karyawan</title>
</head>
<body>
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto fw-bold text-white" href="dasKaryawan.php">Dashboard Karyawan</a>
                
                <a href="login.php" class="text-decoration-none">
                    <button class="btn btn-outline-warning d-flex my-3" type="logout">Logout</button>
                </a>
            </div>
        </div>
    </nav>
    
    <h4 class="text-center my-4">Tambah Presensi</h4>

    <div class="container">
        <form action="presensiTambah.php" method="post" class="row justify-content-center">
        
            <div class="col-3 my-2">
                <label class="form-label">ID Akun</label>
                <input type="int" class="form-control mb-3" name="id_akun">

                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control mb-3" name="nama">
                
                <label class="form-label">Datang</label>
                <input type="time" class="form-control mb-3" name="datang">

                <label class="form-label">Pulang</label>
                <input type="time" class="form-control mb-3" name="pulang">

                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control mb-3" name="tanggal">

                <label class="form-label">Jumlah Jam Lembur </label>
                <input type="int" class="form-control mb-3" name="jumlah_lembur">

                <input type="hidden" name="id">
                <br><button type="submit" class="btn btn-primary" name="presensiTambah" value="Presensi Tambah">Tambah Presensi</button>
            </div>
        
            <footer class="text-center">
                    <p class="mt-5 mb-3 text-muted">&copy; 2021 - Tubes Basdat </p>
            </footer>
        </form>
    </div>



    <!-- Bootsrtap Javascript -->
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>

    <!-- Popper Javascript -->
    <script src="libraries/popper.min.js"></script>
</body>
</html>