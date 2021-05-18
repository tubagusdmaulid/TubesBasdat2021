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

    <title>Tambah Akun</title>
</head>
<body>
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto fw-bold text-white" href="dasKaryawan.php">Dashboard Admin</a>
                
                <a href="login.php" class="text-decoration-none">
                    <button class="btn btn-outline-warning d-flex my-3" type="logout">Logout</button>
                </a>
            </div>
        </div>
    </nav>
    
    <h4 class="text-center my-4">Tambah Akun</h4>
 
    <div class="container">
        <form action="tambahAkun.php" method="post" class="row justify-content-center">
        
        <div class="col-3 my-2">
                <label class="form-label">ID Akun</label>
                <input type="int" class="form-control mb-3" name="id_akun">

                <label class="form-label">Level</label>
                <select class="form-select mb-3" name="level">
                <option value="-">- Pilih akun sebagai - </option>
                    <option value="1">Admin</option>
                    <option value="2">Karyawan</option>
                </select>

                <label class="form-label">Nama</label>
                <input type="text" class="form-control mb-3" name="nama">
            
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select mb-3" name="jk">
                <option value="-">- Pilih jenis kelamin - </option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>

                <label class="form-label">Jabatan</label>
                <input type="text" class="form-control mb-3" name="jabatan">

                <label class="form-label">Golongan</label>
                <input type="text" class="form-control mb-3" name="golongan">
            
                <label class="form-label">Telepon</label>
                <input type="int" class="form-control mb-3" name="telpon">
                
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control mb-3" name="alamat">
                
                <label class="form-label">Email</label>
                <input type="email" class="form-control mb-3" name="email">

                <label class="form-label">Password</label>
                <input type="password" class="form-control mb-3" name="password">

                <input type="hidden" name="id">
                <br><button type="submit" class="btn btn-primary" name="tambahAkun" value="Tambah Akun">Tambah Akun</button>
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