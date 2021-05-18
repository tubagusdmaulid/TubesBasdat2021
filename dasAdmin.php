<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard Admin</title>
</head>
<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level'] == ""){
        header("location:login.php?pesan=gagal");
    }

    ?>

    <!-- Navbar dashboard dan logout, beserta tombol toggle -->
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto fw-bold text-white" href="dasAdmin.php">Dashboard Admin</a>
                
                <a href="login.php" class="text-decoration-none">
                    <button class="btn btn-outline-warning d-flex my-3" type="logout">Logout</button>
                </a>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row justify-content-center my-5 text-center">
            <h4 class="mb-5">Hallo, Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b></h4> 
            <div class="col-4 offset-1">
                <div class="card text-start" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Daftar Presensi</h5>
                        <p class="card-text">Admin dapat melihat rekap daftar presensi.</p>
                        <a href="daftarPresensi.php" class="btn btn-warning">Lihat Presensi</a>
                    </div>
                </div> 
            </div>

            <div class="col-4">
                <div class="card text-start" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Daftar Akun</h5>
                        <p class="card-text">Admin dapat melakukan melihat, menambah, menghapus, dan mengupdate data akun.</p>
                        <a href="daftarAkun.php" class="btn btn-warning">Lihat Akun</a>
                    </div>
                </div> 
            </div>

            <footer>
                <p class="mt-5 mb-3 text-muted">&copy; 2021 - Tubes Basdat </p>
            </footer>
        </div>

    </div>




    <!-- Bootsrtap Javascript -->
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>

    <!-- Popper Javascript -->
    <script src="libraries/popper.min.js"></script>
</body>
</html>